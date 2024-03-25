import React, {useState} from 'react';
import {Input} from "../../input.jsx";
import {Button} from "../../button.jsx";
import {Textarea} from "../../textarea.jsx";
import axios from "axios";

export default function PropertyDetails({nextPage, prevPage}) {
    const [propertyDetails, setPropertyDetails] = useState({
        title: '',
        description: '',
        price: 0,
        sqft: 0,
        bedrooms: 0,
        bathrooms: 0,
        beds: 0,
        guests: 0,
        minNights: 0
    });
    const [errors, setErrors] = useState({});

    const handleSubmit = (e) => {
        e.preventDefault();
        const newErrors = {};

        // Check if any field is empty
        for (const field of ['title', 'description', 'price', 'sqft', 'bedrooms', 'bathrooms', 'beds', 'guests', 'minNights']) {
            if (!propertyDetails[field]) {
                newErrors[field] = 'This field is required';
            }
        }
        console.log(newErrors);
        if (Object.keys(newErrors).length > 0) {
            setErrors(newErrors);
        } else {
            submitForm();
        }
    };


    // Handle input change for text fields
    const handleInputChange = (e) => {
        const {id, value} = e.target;
        setPropertyDetails(prevState => ({
            ...prevState,
            [id]: value
        }));
    };

    // Handle input change for number fields
    const handleNumberChange = (e) => {
        const {id, value} = e.target;
        const camelCaseId = id.replace(/-([a-z])/g, (g) => g[1].toUpperCase()); // Convert dash-case to camelCase
        setPropertyDetails(prevState => ({
            ...prevState,
            [camelCaseId]: parseInt(value) || 0 // Use the converted ID
        }));
    };
    // Handle form submission
    const submitForm = () => {
        axios.post('/owners/property/1/onboarding/propertyDetails', propertyDetails)
            .then(response => {
                console.log(response);
            })
            .catch(error => {
                console.log(error);
            });
        //Go to next step
        nextPage();
    };

    return (
        <form onSubmit={handleSubmit} className="">
            <div className="flex gap-8 w-full xl:mx-auto lg:flex-row flex-col-reverse max-w-screen-xl px-4">
                <div className="max-w-3xl w-full">
                    <h1 className="text-2xl font-semibold mb-6 dark:text-zinc-200">Property Details</h1>

                    <div className="grid gap-6">
                        <div>
                            <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="title">
                                Title
                            </label>
                            <Input
                                id="title"
                                placeholder="Title of your property"
                                value={propertyDetails?.title}
                                onChange={handleInputChange}
                            />
                            {errors.title ? <div className={"text-red-300"}>{errors.title}</div> : null}
                        </div>
                        <div>
                            <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="description">
                                Description
                            </label>
                            <Textarea
                                id="description"
                                placeholder="Describe your property"
                                value={propertyDetails?.description}
                                onChange={handleInputChange}
                            />
                            {errors.description ? <div className={"text-red-300"}>{errors.description}</div> : null}
                        </div>
                        <div>
                            <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="price">
                                Price
                            </label>
                            <Input
                                id="price"
                                placeholder="Price per night"
                                type="number"
                                value={propertyDetails?.price}
                                onChange={handleNumberChange}
                            />
                            {errors.price ? <div className={"text-red-300"}>{errors.price}</div> : null}
                        </div>
                        <div>
                            <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="sqft">
                                Square Feet
                            </label>
                            <Input
                                id="sqft"
                                placeholder="Total square footage"
                                type="number"
                                value={propertyDetails?.sqft}
                                onChange={handleNumberChange}
                            />
                            {errors.sqft ? <div className={"text-red-300"}>{errors.sqft}</div> : null}
                        </div>
                        <div className="grid grid-cols-2 gap-4">
                            <div>
                                <label className="block text-sm font-medium mb-1 dark:text-zinc-200 "
                                       htmlFor="bedrooms">
                                    # of Bedrooms
                                </label>
                                <Input
                                    id="bedrooms"
                                    placeholder="Number of bedrooms"
                                    type="number"
                                    value={propertyDetails?.bedrooms}
                                    onChange={handleNumberChange}
                                />
                                {errors.bedrooms ? <div className={"text-red-300"}>{errors.bedrooms}</div> : null}
                            </div>
                            <div>
                                <label className="block text-sm font-medium mb-1 dark:text-zinc-200 "
                                       htmlFor="bathrooms">
                                    # of Bathrooms
                                </label>
                                <Input
                                    id="bathrooms"
                                    placeholder="Number of bathrooms"
                                    type="number"
                                    value={propertyDetails?.bathrooms}
                                    onChange={handleNumberChange}
                                />
                                {errors.bathrooms ? <div className={"text-red-300"}>{errors.bathrooms}</div> : null}
                            </div>
                        </div>
                        <div className="grid grid-cols-2 gap-4">
                            <div>
                                <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="beds">
                                    # of Beds
                                </label>
                                <Input
                                    id="beds"
                                    placeholder="Number of beds"
                                    type="number"
                                    value={propertyDetails?.beds}
                                    onChange={handleNumberChange}
                                />
                                {errors.beds ? <div className={"text-red-300"}>{errors.beds}</div> : null}
                            </div>
                            <div>
                                <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="guests">
                                    # of Guests
                                </label>
                                <Input
                                    id="guests"
                                    placeholder="Maximum number of guests"
                                    type="number"
                                    value={propertyDetails?.guests}
                                    onChange={handleNumberChange}
                                />
                                {errors.guests ? <div className={"text-red-300"}>{errors.guests}</div> : null}
                            </div>
                        </div>
                        <div>
                            <label className="block text-sm font-medium mb-1 dark:text-zinc-200 " htmlFor="minNights">
                                # of Min Nights
                            </label>
                            <Input
                                id="min-nights"
                                placeholder="Minimum nights stay"
                                type="number"
                                value={propertyDetails?.minNights}
                                onChange={handleNumberChange}
                            />
                            {errors.minNights ? <div className={"text-red-300"}>{errors.minNights}</div> : null}
                        </div>
                    </div>

                </div>

                <img
                    className={"lg:max-w-lg object-cover rounded-l overflow-clip"}
                    src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/el-born/office_setup.webp"
                    alt="Property"
                />
            </div>
            <div className="flex justify-between mt-4">
                <Button className={"cursor-pointer"} onClick={prevPage}>Back</Button>
                <Button type="submit" className={"cursor-pointer"}>Next</Button>
            </div>
        </form>

    );
}
