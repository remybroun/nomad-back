import { Link, Head } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Welcome" />

            <div class="w-full">
                <div class="layout-center-space py-12 lg:py-0">
                    <div class="flex flex-col">
                        <div class="grid overflow-hidden md:grid-cols-2 md:gap-x-14">
                            <div class="flex justify-center">
                                <section class="self-center md:-translate-y-8 2xl:-translate-y-20">
                                    <h1 class="typs-heading-hero whitespace-pre">Swap homes
                                    &amp; travel <i class="italic">freely</i>
                                    </h1>
                                    <h2 class="typs-body-1 mt-6 text-secondary md:max-w-full md:pe-12 xl:pe-72 2xl:pe-96">Members-only home exchange network, powered by close community. Share homes and travel for $0/nightly.</h2>
                                    <div class="mt-6 flex flex-row items-center gap-x-5">
                                        <a class="font-inter flex shrink-0 items-center justify-center rounded-full duration-150 disabled:pointer-events-none disabled:cursor-not-allowed whitespace-pre font-semibold border border-transparent bg-button-primary text-button-primary hover:bg-button-primary-hover active:bg-button-primary-hover disabled:bg-button-primary-disabled disabled:text-overlay min-w-20 px-5 py-2 text-s13 lg:px-7 lg:py-3 lg:text-s16 cursor-pointer" href="/onboarding">Apply now</a>
                                        <h3 class="typs-caption-3">Renters &amp; owners welcome</h3>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <style>{`
                .bg-dots-darker {
                    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
                }
                @media (prefers-color-scheme: dark) {
                    .dark\\:bg-dots-lighter {
                        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
                    }
                }
            `}</style>
        </>
    );
}
