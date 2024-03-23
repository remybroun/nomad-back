import { Link, Head } from '@inertiajs/inertia-react';
import Button from '../../components/Button';
export default function Welcome({ auth, laravelVersion, phpVersion }) {
   return (
    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <nav className="flex justify-between items-center py-6">
        <HotelIcon className="text-red-500 h-8 w-auto" />
        <div className="flex items-center space-x-4">
          <Link className="text-sm font-medium text-gray-500 hover:text-gray-900" href="#">
            Ready to Airbnb it?
          </Link>
          <Button className="bg-[#FF385C] text-white">Airbnb Setup</Button>
        </div>
      </nav>
      <header className="text-center">
        <h1 className="text-6xl font-semibold leading-tight">Airbnb it easily with Airbnb Setup</h1>
      </header>
      <div className="relative mt-12">
        <div className="absolute inset-0 flex items-center justify-center">
          <div className="grid grid-cols-3 gap-4" />
        </div>
        <div className="relative mx-auto w-[375px] h-[812px] bg-white">
          <img
            alt="Phone"
            className="w-full h-full object-cover"
            height="812"
            src="/placeholder.svg"
            style={{
              aspectRatio: "375/812",
              objectFit: "cover",
            }}
            width="375"
          />
          <div className="absolute inset-0 flex flex-col p-6">
            <div className="mt-24 flex items-center justify-between">
              <PlayIcon className="text-white h-6 w-6" />
              <div className="text-right">
                <p className="text-sm font-medium text-white">Meet your Superhost</p>
                <p className="text-xs text-white">Little Rock, Arkansas</p>
                <p className="text-xs text-white">3 years of hosting experience</p>
                <p className="text-xs text-white">Myranda's house is rated 4.96</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 className="text-xl font-semibold">One-to-one guidance from a Superhost</h3>
          <p className="mt-2 text-sm text-gray-600">
            We’ll match you with a Superhost in your area, who’ll guide you from your first question to your first
            guest—by phone, video call, or chat.
          </p>
        </div>
        <div>
          <h3 className="text-xl font-semibold">An experienced guest for your first booking</h3>
          <p className="mt-2 text-sm text-gray-600">
            For your first booking, you can choose to welcome an experienced guest who has at least three stays and a
            good track record on Airbnb.
          </p>
        </div>
        <div>
          <h3 className="text-xl font-semibold">Specialized support from Airbnb</h3>
          <p className="mt-2 text-sm text-gray-600">
            New Hosts get one-tap access to specially trained Community Support agents who can help with everything from
            account issues to billing support.
          </p>
        </div>
      </div>
    </div>
  )
}

function HotelIcon(props) {
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
      <path d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2Z" />
      <path d="m9 16 .348-.24c1.465-1.013 3.84-1.013 5.304 0L15 16" />
      <path d="M8 7h.01" />
      <path d="M16 7h.01" />
      <path d="M12 7h.01" />
      <path d="M12 11h.01" />
      <path d="M16 11h.01" />
      <path d="M8 11h.01" />
      <path d="M10 22v-6.5m4 0V22" />
    </svg>
  )
}


function PlayIcon(props) {
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
      <polygon points="5 3 19 12 5 21 5 3" />
    </svg>
  )
}

