/**
 * v0 by Vercel.
 * @see https://v0.dev/t/abysHXWNasA
 * Documentation: https://v0.dev/docs#integrating-generated-code-into-your-nextjs-app
 */
import {Input} from "../../input.jsx";
import {Button} from "../../button.jsx";
import {Text} from "../../text.jsx";
import {useState} from "react";
import axios from 'axios';


export default function LocationPage({nextPage, prevPage}) {
    const [selectedOptions, setSelectedOptions] = useState([]);
    const [searchResults, setSearchResults] = useState([]);
    const [location, setLocation] = useState({});
    const [userInput, setUserInput] = useState('');

    const handleOptionSelect = (option) => {
        if (selectedOptions.includes(option)) {
            setSelectedOptions(selectedOptions.filter(item => item !== option));
        } else {
            setSelectedOptions([...selectedOptions, option]);
        }
    };

    const submitPage = () => {
        let data = {
            location: location,
            amenities: selectedOptions
        }
        axios.post('/owners/onboarding/step/location', {data: data})
            .then(response => {
                // Handle success
                console.log(response.data);
                nextPage();
            })
            .catch(error => {
                // Handle error
                console.error(error);
            });
    }

    const typeSearchLocation = async (searchQuery) => {
        setUserInput(searchQuery); // Update user input state

        try {
            const response = await axios.get(`/search/locations?query=${searchQuery}`);
            setSearchResults(response.data);
        } catch (error) {
            console.error('Error searching for location:', error);
            // Handle error, if needed
        }
    };

    const selectLocation = (location) => {
        setLocation(location);
        setSearchResults([]); // Clear search results
        setUserInput(location.name); // Set input value to selected location
    }


    // Define array of options
    const options = [
        {label: 'Beach', icon: <WavesIcon className="mr-2"/>},
        {label: 'City', icon: <LandmarkIcon className="mr-2"/>},
        {label: 'Mountains', icon: <MountainIcon className="mr-2"/>},
        {label: '(National) parks', icon: <ParkingSquareIcon className="mr-2"/>},
        {label: 'Bars & Restaurants', icon: <MenuIcon className="mr-2"/>},
        {label: 'Airport', icon: <PlaneIcon className="mr-2"/>},
        {label: 'Public transport', icon: <BusIcon className="mr-2"/>},
        {label: 'Free parking', icon: <ParkingSquareIcon className="mr-2"/>},
        {label: 'Supermarkets', icon: <ShoppingCartIcon className="mr-2"/>},
        {label: 'Local markets', icon: <StoreIcon className="mr-2"/>},
        {label: 'Co-working spaces', icon: <WorkflowIcon className="mr-2"/>},
        {label: 'Surfing', icon: <WavesIcon className="mr-2"/>},
        {label: 'Gym', icon: <DumbbellIcon className="mr-2"/>},
        {label: 'Yoga classes', icon: <ActivityIcon className="mr-2"/>},
        {label: 'Hiking', icon: <BackpackIcon className="mr-2"/>},
    ];

    return (
        <div className="p-8">
            <h1 className="text-3xl font-semibold mb-8 dark:text-zinc-200">
                Let’s list your home!
            </h1>
            <div className="my-10">
                <Text className="text-xl">Where is your home located?</Text>
                <Input
                    placeholder="Barcelona, Spain"
                    value={userInput} // Use userInput state for input value
                    onChange={(e) => typeSearchLocation(e.target.value)}
                />
                {/* Display search results, if needed */}
                {searchResults && searchResults.length > 0 && (
                    <div className="rounded-b-lg bg-gray-50 border border-t-0 border-gray-100 shadow-md">
                        <ul className="grid w-full overflow-hidden">
                            {searchResults.map((result, index) => (
                                <li key={index}
                                    className="border-t cursor-pointer block p-3 text-sm flex items-center gap-2"
                                    onClick={() => selectLocation(result)}>
                                    <span className="font-medium">{result.name}</span>
                                    <span className="text-sm text-gray-500 ml-auto">{result.location}</span>
                                </li>
                            ))}
                        </ul>
                    </div>
                )}
                {/*{(!searchResults || searchResults.length === 0) && userInput.trim() !== '' && !location.name && (*/}
                {/*    <Button className="mt-2 cursor-pointer">*/}
                {/*        Add Location*/}
                {/*    </Button>*/}
                {/*)}*/}

            </div>
            <div className="mb-8">
                <Text className={"text-xl"}>Easy access to</Text>
                <Text className="text-sm mb-4">
                    Select the options that are easily accessible from your home's location (within a 20-30 minute walk
                    or a
                    10-minute drive)
                </Text>
                <div className="grid grid-cols-3 gap-4">
                    {options.map((option, index) => (
                        <Button
                            key={index}
                            color={"zinc"}
                            className={"cursor-pointer"}
                            onClick={() => handleOptionSelect(option.label)}
                        >
                            {selectedOptions.includes(option.label) ? '✓' : option.icon} {/* Assuming you have icon properties for each option */}
                            {option.label}
                        </Button>
                    ))}
                </div>
            </div>
            <div className="flex justify-between mt-4">
                <Button className={"cursor-pointer"} onClick={prevPage}>Back</Button>
                <Button className={"cursor-pointer"} onClick={submitPage}>Next</Button>
            </div>
        </div>
    );
}

function ActivityIcon(props) {
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
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
        </svg>
    )
}


function BackpackIcon(props) {
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
            <path d="M4 20V10a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z"/>
            <path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/>
            <path d="M8 21v-5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5"/>
            <path d="M8 10h8"/>
            <path d="M8 18h8"/>
        </svg>
    )
}


function BusIcon(props) {
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
            <path d="M8 6v6"/>
            <path d="M15 6v6"/>
            <path d="M2 12h19.6"/>
            <path
                d="M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3"/>
            <circle cx="7" cy="18" r="2"/>
            <path d="M9 18h5"/>
            <circle cx="16" cy="18" r="2"/>
        </svg>
    )
}


function DumbbellIcon(props) {
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
            <path d="m6.5 6.5 11 11"/>
            <path d="m21 21-1-1"/>
            <path d="m3 3 1 1"/>
            <path d="m18 22 4-4"/>
            <path d="m2 6 4-4"/>
            <path d="m3 10 7-7"/>
            <path d="m14 21 7-7"/>
        </svg>
    )
}


function LandmarkIcon(props) {
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
            <line x1="3" x2="21" y1="22" y2="22"/>
            <line x1="6" x2="6" y1="18" y2="11"/>
            <line x1="10" x2="10" y1="18" y2="11"/>
            <line x1="14" x2="14" y1="18" y2="11"/>
            <line x1="18" x2="18" y1="18" y2="11"/>
            <polygon points="12 2 20 7 4 7"/>
        </svg>
    )
}


function MenuIcon(props) {
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
            <line x1="4" x2="20" y1="12" y2="12"/>
            <line x1="4" x2="20" y1="6" y2="6"/>
            <line x1="4" x2="20" y1="18" y2="18"/>
        </svg>
    )
}


function MountainIcon(props) {
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
            <path d="m8 3 4 8 5-5 5 15H2L8 3z"/>
        </svg>
    )
}


function ParkingSquareIcon(props) {
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
            <rect width="18" height="18" x="3" y="3" rx="2"/>
            <path d="M9 17V7h4a3 3 0 0 1 0 6H9"/>
        </svg>
    )
}


function PlaneIcon(props) {
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
            <path
                d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>
        </svg>
    )
}


function ShoppingCartIcon(props) {
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
            <circle cx="8" cy="21" r="1"/>
            <circle cx="19" cy="21" r="1"/>
            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
        </svg>
    )
}


function StoreIcon(props) {
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
            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/>
            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
            <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/>
            <path d="M2 7h20"/>
            <path
                d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7"/>
        </svg>
    )
}


function WavesIcon(props) {
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
            <path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
            <path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
            <path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
        </svg>
    )
}


function WorkflowIcon(props) {
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
            <rect width="8" height="8" x="3" y="3" rx="2"/>
            <path d="M7 11v4a2 2 0 0 0 2 2h4"/>
            <rect width="8" height="8" x="13" y="13" rx="2"/>
        </svg>
    )
}
