import {Button} from "../../button.jsx";


export default function Component({nextPage}) {
    return (
        <div
            className="flex items-center min-h-screen p-4 md:p-6 bg-cover bg-center"
            style={{
                backgroundImage: "url('/placeholder.svg')",
            }}
        >
            <div className="max-w-lg w-full mx-auto space-y-6">
                <div className="space-y-2 text-center">
                    <img
                        src="/ns-logo-black.png"
                        alt="Nomad Stay"
                        className="w-24 h-24 mx-auto"/>
                    <h1 className="text-3xl font-bold tracking-tighter sm:text-4xl dark:text-zinc-200">
                        Welcome to Nomad Stay</h1>
                    <p className="text-gray-500 md:text-base/relaxed dark:text-gray-400">
                        Let's get your apartment ready for guests.
                    </p>
                </div>
                <div className="space-y-2">
                    <Button onClick={() => {
                        nextPage()
                    }} className="w-full cursor-pointer">
                        Configure my listing
                    </Button>
                </div>
            </div>
        </div>
    )
}

