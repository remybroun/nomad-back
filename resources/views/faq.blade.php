@extends('layouts.app')
@section('title')
    Frequently Asked Questions
@endsection
@section('metaTitle')
    Frequently Asked Questions
@endsection
@section('metaDescription')
    Here are the answers to all of the most recent questions on Sora.
@endsection
@section('metaImage')
    {{asset('android-icon-192x192.png')}}
@endsection


@php
    $questions = [
    [
        'question' => 'What is NomadStay?',
        'answer' => 'NomadStay is a specialized accommodation platform for digital nomads and remote workers, offering a global network of fully furnished apartments with flexible accommodations. Our unique feature is providing apartments equipped with high-quality workstations designed to enhance productivity and well-being for those who live and work in different destinations.'
    ],
    [
        'question' => 'Who is NomadStay for?',
        'answer' => 'Our services are tailored for digital nomads, remote workers, and anyone needing temporary accommodations that support a productive work environment while exploring new locations.'
    ],
    [
        'question' => 'How do I book an apartment on NomadStay?',
        'answer' => 'You can search for available apartments on our platform, filter according to your preferences (location, duration, etc.), and book directly through our website. If you have specific requirements or questions, our customer service is here to help.'
    ],
    [
        'question' => 'What makes NomadStay apartments suitable for remote work?',
        'answer' => 'Each apartment in our network is equipped with a premium workstation, including an ergonomic office chair, standing desk, HD webcam, 4K monitor, mechanical keyboard, wireless mouse, and external microphone, ensuring a comfortable and productive work environment.'
    ],
    [
        'question' => 'Can I see the workstation amenities before booking?',
        'answer' => 'Yes, listings on our platform include detailed descriptions and photos of the workstation and other apartment amenities to help you make an informed decision.'
    ],
    [
        'question' => 'How does the pricing work?',
        'answer' => 'Prices are set by the property owners but generally include a premium for the specialized workstation amenities. Despite this, our prices are competitive, reflecting the high value offered to remote workers and digital nomads.'
    ],
    [
        'question' => 'What payment methods are accepted?',
        'answer' => 'NomadStay accepts various payment methods, including credit/debit cards, PayPal, and bank transfers. The available options may vary depending on the property\'s location.'
    ],
    [
        'question' => 'What if I encounter issues with my accommodation?',
        'answer' => 'Our customer support team is available to assist with any issues or concerns during your stay. We strive to ensure a smooth and enjoyable experience for all our guests.'
    ],
    [
        'question' => 'Are there any additional services provided to guests?',
        'answer' => 'While the primary offering is the accommodation with a workstation, we often provide additional services like local guides, community events, and support with logistics. These services may vary by location.'
    ],
    [
        'question' => 'How can I list my property on NomadStay?',
        'answer' => 'Property owners can join the NomadStay network by contacting us through our website. Our team will guide you through the process, ensuring your property meets our standards and is ready for digital nomads and remote workers.'
    ],
    [
        'question' => 'What are the benefits of listing my property with NomadStay?',
        'answer' => 'By listing with NomadStay, you gain access to a specific audience of digital nomads and remote workers, the opportunity to increase your rental income by up to 15%, global visibility, and flexible booking conditions tailored to your strategy.'
    ]
];

@endphp

@include('components.headers.main')
<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <img class="w-max rounded-lg" src="https://nomadlivingimages.s3.us-east-2.amazonaws.com/settle/el-born/office_setup.webp" alt="Sora logo">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">
                    Frequently asked questions by remote workers and property owners
                </h2>
                <p class="mt-4 text-base leading-7 text-gray-600">
                    Here are the answers to all of the most recent questions on Sora.
                </p>
            </div>
            <div class="mt-10 lg:col-span-7 lg:mt-0">
                <dl class="space-y-10">
                    @foreach($questions as $question)
                        <div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">{{ $question['question'] }}</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ $question['answer'] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</div>
@include('components.footers.main')



