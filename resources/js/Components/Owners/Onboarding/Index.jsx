//Index Owner Onboarding JSX file that will pilot an owner through the process of listing their property on the platform
// There are 4 steps to the onboarding process :
// 1. Property Details (Title, Description, Price, sqft, # of bedrooms, # of bathrooms, # of beds, # of guests, # of min nights)
// 2. Location and Amenities (Address, City, State, Zip, Country) (Amenities: Wifi, Kitchen, TV, Heating, Air Conditioning, Washer, Dryer, Free Parking, Elevator, Hot Tub, Pool, Gym, Breakfast, Pets Allowed, Smoking Allowed)
// 3. Remote Work Setup (Standing Desk, Ergonomic Chair, External Monitor, External Keyboard, External Mouse, Printer, Scanner, Office Chair, Office Desk, Office Lamp)
// 4. Upload Photos

import React, {useState} from 'react';
import LocationPage from "./LocationPage.jsx";
import {Text} from "../../text.jsx";
import {Button} from "../../button.jsx";
import PropertyDetailsPage from "./PropertyDetailsPage.jsx";
import RemoteWorkSetupPage from "./RemoteWorkSetupPage.jsx";
import UploadPhotosPage from "./UploadPhotosPage.jsx";
import OnboardingLandingPage from './OnboardingLandingPage.jsx';

// This page only operates the pages next/back buttons and the state of the current page
export default function OnBoardingIndex() {
    const [currentPage, setCurrentPage] = useState(0);
    const [propertyDetails, setPropertyDetails] = useState({});
    const [locationDetails, setLocationDetails] = useState({});
    const [remoteWorkSetup, setRemoteWorkSetup] = useState({});
    const [photos, setPhotos] = useState([]);

    const nextPage = () => {
        console.log("Next Page #", currentPage);
        if (currentPage >= 5) {
            console.log("Submit the form");
            console.log("Property Details", propertyDetails);
            console.log("Location Details", locationDetails);
            console.log("Remote Work Setup", remoteWorkSetup);
            console.log("Photos", photos);
            return;
        }
        setCurrentPage(currentPage + 1);
    }

    const prevPage = () => {
        if (currentPage <= 0) {
            return;
        }
        setCurrentPage(currentPage - 1);
    }

    const handlePropertyDetails = (details) => {
        setPropertyDetails(details);
    }

    const handleLocationDetails = (details) => {
        setLocationDetails(details);
    }

    const handleRemoteWorkSetup = (details) => {
        setRemoteWorkSetup(details);
    }

    const handlePhotos = (photos) => {
        setPhotos(photos);
    }

    const renderPage = () => {
        switch (currentPage) {
            case 0:
                return <OnboardingLandingPage nextPage={nextPage}/>;
            case 1:
                return <PropertyDetailsPage handlePropertyDetails={handlePropertyDetails}
                                            nextPage={nextPage}
                                            prevPage={prevPage}/>;
            case 2:
                return <LocationPage handleLocationDetails={handleLocationDetails}
                                     nextPage={nextPage}
                                     prevPage={prevPage}/>;
            case 3:
                return <RemoteWorkSetupPage handleRemoteWorkSetup={handleRemoteWorkSetup}
                                            nextPage={nextPage}
                                            prevPage={prevPage}/>;
            case 4:
                return <UploadPhotosPage handlePhotos={handlePhotos}
                                         nextPage={nextPage}
                                         prevPage={prevPage}/>;
            // If you have a final confirmation page or similar, add it here
            default:
                // Consider adding a default case for when all steps are completed
                return <div>All steps completed. Thank you!</div>;
        }
    };


    return (
        <div className={'w-full max-w-screen-xl mx-auto'}>


            {/*if currentpage 0, show landing page*/}
            {
                currentPage === 0 ? (
                    <OnboardingLandingPage nextPage={nextPage}/>
                    ) :
                    <div className={'p-6 flex flex-col h-full justify-between'}>
                        <div className="flex lg:flex-row flex-col items-center gap-2 my-6">
                            <div
                                className={`flex items-center ${currentPage === 0 ? 'text-everglade-500' : 'text-gray-500'}`}>
                                <div
                                    className={`bg-${currentPage === 0 ? 'everglade' : 'everglade'}-400 text-white rounded-full w-8 h-8 flex items-center justify-center`}>
                                    1
                                </div>
                                <Text className="text-sm font-medium ml-2">Property Details</Text>
                            </div>
                            <div className="flex-1 h-0.5 bg-gray-300"/>
                            <div className={`${currentPage === 1 ? 'text-everglade-500' : 'text-gray-500'}`}>2</div>
                            <Text
                                className={`text-sm font-medium ${currentPage === 1 ? 'text-everglade-500' : 'text-gray-500'} ml-2`}>Location
                                and Amenities</Text>
                            <div className="flex-1 h-0.5 bg-gray-300 mx-4"/>
                            <div className={`${currentPage === 2 ? 'text-everglade-500' : 'text-gray-500'}`}>3</div>
                            <Text
                                className={`text-sm font-medium ${currentPage === 2 ? 'text-everglade-500' : 'text-gray-500'} ml-2`}>Remote
                                Work Setup</Text>
                            <div className="flex-1 h-0.5 bg-gray-300 mx-4"/>
                            <div className={`${currentPage === 3 ? 'text-everglade-500' : 'text-gray-500'}`}>4</div>
                            <Text
                                className={`text-sm font-medium ${currentPage === 3 ? 'text-everglade-500' : 'text-gray-500'} ml-2`}>Upload
                                Photos</Text>
                        </div>
                        <div className="mb-6">
                            <h1 className="text-3xl font-semibold dark:text-zinc-200">
                                {currentPage === 0 && "Let's add property details."}
                                {currentPage === 1 && "Where is your property located and what amenities does it offer?"}
                                {currentPage === 2 && "Set up your property for remote work."}
                                {currentPage === 3 && "Upload photos of your property."}
                            </h1>
                        </div>
                        {renderPage()}
                    </div>
            }


        </div>
    )


}
