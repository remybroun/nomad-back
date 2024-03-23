// 3. Remote Work Setup (Standing Desk, Ergonomic Chair, External Monitor, External Keyboard, External Mouse, Printer, Scanner, Office Chair, Office Desk, Office Lamp)


import React, {useState} from 'react';
import {Button} from "../../button.jsx";
import axios from "axios";

export default function RemoteWorkSetupPage({nextPage, prevPage}) {
    const [standingDesk, setStandingDesk] = useState(false);
    const [ergonomicChair, setErgonomicChair] = useState(false);
    const [externalMonitor, setExternalMonitor] = useState(false);
    const [externalKeyboard, setExternalKeyboard] = useState(false);
    const [externalMouse, setExternalMouse] = useState(false);
    const [officeChair, setOfficeChair] = useState(false);
    const [officeDesk, setOfficeDesk] = useState(false);
    const [officeLamp, setOfficeLamp] = useState(false);

    const toggleStandingDesk = () => {
        setStandingDesk(!standingDesk);
    };

    const toggleErgonomicChair = () => {
        setErgonomicChair(!ergonomicChair);
    };

    const toggleExternalMonitor = () => {
        setExternalMonitor(!externalMonitor);
    };

    const toggleExternalKeyboard = () => {
        setExternalKeyboard(!externalKeyboard);
    };

    const toggleExternalMouse = () => {
        setExternalMouse(!externalMouse);
    };


    const toggleOfficeChair = () => {
        setOfficeChair(!officeChair);
    };

    const toggleOfficeDesk = () => {
        setOfficeDesk(!officeDesk);
    };

    const toggleOfficeLamp = () => {
        setOfficeLamp(!officeLamp);
    };
    const submitForm = () => {
        axios.post('owners/onboarding/step/propertyDetails', {
            standingDesk,
            ergonomicChair,
            externalMonitor,
            externalKeyboard,
            externalMouse,
            officeChair,
            officeDesk,
            officeLamp
        }).then(() => {
            nextPage();
        });

    };

    return (
        <div className="max-w-4xl mx-auto p-8 w-full">
            <div className="grid grid-cols-2 gap-4">
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${standingDesk ? 'bg-gray-100' : ''}`}
                    onClick={toggleStandingDesk}>
                    <LampDeskIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">Standing Desk</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${ergonomicChair ? 'bg-gray-100' : ''}`}
                    onClick={toggleErgonomicChair}>
                    <RockingChairIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">Ergonomic Chair</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${externalMonitor ? 'bg-gray-100' : ''}`}
                    onClick={toggleExternalMonitor}>
                    <MonitorIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">External Monitor</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${externalKeyboard ? 'bg-gray-100' : ''}`}
                    onClick={toggleExternalKeyboard}>
                    <KeyboardIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">External Keyboard</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${externalMouse ? 'bg-gray-100' : ''}`}
                    onClick={toggleExternalMouse}>
                    <MouseIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">External Mouse</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${officeChair ? 'bg-gray-100' : ''}`}
                    onClick={toggleOfficeChair}>
                    <RockingChairIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">Office Chair</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${officeDesk ? 'bg-gray-100' : ''}`}
                    onClick={toggleOfficeDesk}>
                    <LampDeskIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">Office Desk</span>
                </div>
                <div
                    className={`flex flex-col items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-100 ${officeLamp ? 'bg-gray-100' : ''}`}
                    onClick={toggleOfficeLamp}>
                    <LampDeskIcon className="h-12 w-12 mb-2"/>
                    <span className="text-center">Office Lamp</span>
                </div>
            </div>
            <div className="flex justify-between mt-4">
                <Button className={"cursor-pointer"} onClick={prevPage}>Back</Button>
                <Button className={"cursor-pointer"} onClick={submitForm}>Next</Button>
            </div>
        </div>
    );
}

function KeyboardIcon(props) {
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
            <rect width="20" height="16" x="2" y="4" rx="2" ry="2"/>
            <path d="M6 8h.001"/>
            <path d="M10 8h.001"/>
            <path d="M14 8h.001"/>
            <path d="M18 8h.001"/>
            <path d="M8 12h.001"/>
            <path d="M12 12h.001"/>
            <path d="M16 12h.001"/>
            <path d="M7 16h10"/>
        </svg>
    )
}


function LampDeskIcon(props) {
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
            <path d="m14 5-3 3 2 7 8-8-7-2Z"/>
            <path d="m14 5-3 3-3-3 3-3 3 3Z"/>
            <path d="M9.5 6.5 4 12l3 6"/>
            <path d="M3 22v-2c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2H3Z"/>
        </svg>
    )
}


function MonitorIcon(props) {
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
            <rect width="20" height="14" x="2" y="3" rx="2"/>
            <line x1="8" x2="16" y1="21" y2="21"/>
            <line x1="12" x2="12" y1="17" y2="21"/>
        </svg>
    )
}


function MouseIcon(props) {
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
            <rect x="5" y="2" width="14" height="20" rx="7"/>
            <path d="M12 6v4"/>
        </svg>
    )
}


function RockingChairIcon(props) {
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
            <polyline points="3.5 2 6.5 12.5 18 12.5"/>
            <line x1="9.5" x2="5.5" y1="12.5" y2="20"/>
            <line x1="15" x2="18.5" y1="12.5" y2="20"/>
            <path d="M2.75 18a13 13 0 0 0 18.5 0"/>
        </svg>
    )
}
