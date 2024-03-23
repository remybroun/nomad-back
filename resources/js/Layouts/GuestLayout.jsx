import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/inertia-react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-100 dark:bg-zinc-900">
            <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-zinc-800 shadow-md overflow-hidden sm:rounded-lg">

                <Link href="/">
                    <ApplicationLogo className="w-20 h-20 fill-current text-zinc-200 text-center py-10" />
                </Link>

                {children}
            </div>
        </div>
    );
}
