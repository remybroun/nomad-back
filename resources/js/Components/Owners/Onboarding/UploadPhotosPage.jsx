import React, {useEffect, useState} from "react";
import {Button} from "../../button.jsx";
import {Link} from "../../link.jsx";
import {useDropzone} from 'react-dropzone';
import axios from "axios";

export function UploadPhotosComponent() {
    const [files, setFiles] = useState([]);
    useEffect(() => {
        // This function is returned from useEffect and runs on component unmount
        return () => {
            files.forEach(file => {
                URL.revokeObjectURL(file.preview);
            });
        };
    }, []); // Empty dependency array means this effect runs once on mount and cleanup runs on unmount
    const onDrop = React.useCallback(acceptedFiles => {
        const formData = new FormData();
        acceptedFiles.forEach(file => {
            formData.append('photos[]', file);
        });
        setFiles(prevFiles => [
            ...prevFiles,
            ...acceptedFiles.map(file => Object.assign(file, {
                preview: URL.createObjectURL(file)
            }))
        ]);

    }, []);
    const {getRootProps, getInputProps, isDragActive} = useDropzone({onDrop});


    const uploadFiles = () => {
        // Check if there are files to upload
        if (files.length === 0) {
            console.error('No files to upload.');
            return;
        }

        const formData = new FormData();
        files.forEach(file => {
            formData.append('photos[]', file);
        });

        axios.post('owners/property/1/onboarding/photos', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {
                console.log('Success:', response);
                // Clear the files after successful upload or handle as needed
                setFiles([]);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    };

    const removeFile = (index) => {
        // Revoke the URL for the file being removed to avoid memory leaks
        const fileToRemove = files[index];
        URL.revokeObjectURL(fileToRemove.preview);

        setFiles(currentFiles => currentFiles.filter((_, fileIndex) => fileIndex !== index));
    };

    return (
        <div className="max-w-2xl mx-auto w-full p-6 bg-white dark:bg-zinc-800 rounded-lg shadow-md">
            <div className="flex justify-between items-center mb-4">
                <h2 className="text-lg font-semibold dark:text-zinc-200">
                    Add photos of your property
                </h2>

            </div>
            <div {...getRootProps()}
                 className="flex flex-col items-center justify-center p-4 border-2 border-dashed rounded-md hover:bg-zinc-50 cursor-pointer">
                <UploadIcon className="text-blue-500 mb-2"/>
                <p className="text-sm font-semibold mb-1 dark:text-zinc-200">
                    Drag & Drop or <span className="text-blue-500">Choose file</span> to upload
                </p>
                <p className="text-xs text-gray-500">Supported formats: CVS, XLS, XLSX</p>
                <input {...getInputProps()} />
                {
                    isDragActive ?
                        <p className="text-sm font-semibold mb-1 dark:text-zinc-200">Drop the files here ...</p> :
                        <p className="text-sm font-semibold mb-1 dark:text-zinc-200">Drag 'n' drop some files here, or
                            click to select files</p>
                }
            </div>
            <div className="my-4">
                <div className="flex justify-center items-center">
                    <div className="border-t border-gray-300 flex-grow mr-3"/>
                    <div className="text-gray-500">or</div>
                    <div className="border-t border-gray-300 flex-grow ml-3"/>
                </div>
                <div className="mt-4">
                    <label className="sr-only" htmlFor="url">
                        Import from URL
                    </label>
                    <input
                        type="text"
                        id="url"
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                        placeholder="Paste URL"
                    />
                </div>
            </div>
            {/*Photo preview*/}
            <div className="grid grid-cols-3 gap-4">
                {files.map((file, index) => (
                    <div key={index} className="relative group">
                        <img
                            src={file.preview}
                            alt={file.name}
                            className="w-full h-32 object-cover rounded-md"
                        />
                        <div
                            className="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300">
                            <button
                                className="text-white bg-red-500 px-2 py-1 rounded-md"
                                onClick={() => removeFile(index)}
                            >
                                Remove
                            </button>
                        </div>
                    </div>
                ))}
            </div>


            <div className="flex justify-between items-center mt-4">
                <Link className="text-sm text-blue-500 flex items-center" href="#">
                    <HelpCircleIcon className="mr-1"/>
                    Help Center
                </Link>
                <div className="space-x-2">
                    <Button variant="outline">Cancel</Button>
                    <Button onClick={() => uploadFiles(files)} disabled={files.length === 0}
                            className={"cursor-pointer"}>
                        Import
                    </Button>
                </div>
            </div>
        </div>
    )
}

function HelpCircleIcon(props) {
    return (
        <svg
            {...props}
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
        >
            <circle cx="12" cy="12" r="10"/>
            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
            <path d="M12 17h.01"/>
        </svg>
    )
}


function UploadIcon(props) {
    return (
        <svg
            {...props}
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
        >
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
            <polyline points="17 8 12 3 7 8"/>
            <line x1="12" x2="12" y1="3" y2="15"/>
        </svg>
    )
}

export default function UploadPhotosPage({nextPage, prevPage}) {

    const submitForm = () => {
        nextPage()
    }


    return <div className={"flex flex-col justify-between h-full"}>
        <UploadPhotosComponent/>
        <div className="flex justify-between mt-4">
            <Button className={"cursor-pointer"} onClick={prevPage}>Back</Button>
            <Button className={"cursor-pointer"} onClick={submitForm}>Next</Button>
        </div>
    </div>
}


