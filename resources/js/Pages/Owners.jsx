import React, {useState} from 'react';
import OnBoardingIndex from '../Components/Owners/Onboarding/Index.jsx'

const Owners = () => {

    // initialize text variable
    const [text, setText] = useState('Hello')

    return (

        <div className={"w-full h-screen dark:bg-zinc-900"}>
            <div className={"w-full lg:mx-auto bg-white dark:bg-zinc-900"}>
                <OnBoardingIndex/>
            </div>
        </div>
    );
}

export default Owners;
