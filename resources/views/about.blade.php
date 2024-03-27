@extends('layouts.app')
@section('title', 'Accommodations for remote workers, digital nomads and workations - Nomad Stay')
@section('description', 'Find stays equipped for remote workers. Housing equipped for remote workers, high speed wifi, world-class locations and no more problems being productive.')

<main class="w-full mx-auto max-w-screen-xl">
    @include('components.headers.main')
    <div class="w-full py-12 lg:py-16 xl:py-24">
        <div class="container grid items-center gap-10 px-4 md:px-6 lg:grid-cols-[1fr_500px] bg-zinc-50 rounded">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        <span class="block">About Us</span>
                    </h2>
                    <div class="mt-8 space-y-6">
                        <section aria-labelledby="about-nomadstay">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="about-nomadstay">What is
                                NomadStay?</h3>
                            <p class="mt-2 text-base leading-6 text-gray-600">
                                Nomadstay.com is a platform that offers a variety of accommodation options specifically
                                designed
                                for digital nomads and remote workers. Its main product consists of providing a global
                                network
                                of furnished apartments and flexible accommodations, tailored to the needs of those
                                working
                                remotely and wishing to experience extended travel in different destinations. These
                                apartments
                                not only offer housing amenities but also include workstations to facilitate users'
                                productivity.
                            </p>
                        </section>
                        <section aria-labelledby="benefits-of-advertising">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="benefits-of-advertising">What
                                are the benefits of advertising on NomadStay?</h3>
                            <ul class="mt-2 list-disc pl-5 text-base leading-6 text-gray-600 space-y-2">
                                <li>
                                    <strong>Reach a specific audience that values quality:</strong> Digital nomads and
                                    remote
                                    workers are professionals who value the freedom to work from anywhere in the world.
                                    As a
                                    result, they are willing to pay higher rents for accommodations that offer amenities
                                    and
                                    facilities that enable them to maintain their productivity while traveling.
                                </li>
                                <li>
                                    <strong>Increase your income with the workstation:</strong> Offering a workstation
                                    can
                                    increase the rental price by 15%, attracting digital nomads and remote workers
                                    willing to
                                    pay more for amenities that meet their work needs.
                                </li>
                                <li>
                                    <strong>Global visibility:</strong> The NomadStay platform has a global presence,
                                    allowing
                                    you to reach travelers from around the world who are seeking flexible and tailored
                                    accommodations for their remote work needs.
                                </li>
                                <li>
                                    <strong>Flexibility and costs:</strong> You can set your own prices and booking
                                    conditions,
                                    allowing you to tailor your strategy to your business and market needs. In addition,
                                    our
                                    booking conditions are more attractive than Airbnb and other platforms; we only
                                    charge a 5%
                                    commission.
                                </li>
                            </ul>
                        </section>
                        <section aria-labelledby="workstation">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="workstation">Workstation</h3>
                            <p class="mt-2 text-base leading-6 text-gray-600">
                                Our workstation is the heart of our offering, designed to meet the specific needs of
                                digital
                                nomads and remote workers. Equipped with premium features such as an ergonomic office
                                chair,
                                standing desk, HD webcam, 4K monitor, mechanical keyboard, wireless multitask mouse, and
                                external microphone, it not only provides the necessary tools for efficient work but
                                also
                                prioritizes user comfort and well-being.
                            </p>
                        </section>
                    </div>
                </div>
            <img src="https://a-step-in.s3.us-east-2.amazonaws.com/boundra/office_setup.webp" alt="Team Image" width="500" height="500"
                 class="aspect-square rounded-lg object-cover">
        </div>
    </div>
</main>
@include('components.footers.main')
