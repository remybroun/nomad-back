<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Validate other fields as necessary
            'accessible_options' => 'sometimes|array',
            // Add validation for remote work options
        ]);

        // Handle the accessible options array if provided
        if (isset($validatedData['accessible_options'])) {
            $validatedData['accessible_options'] = json_encode($validatedData['accessible_options']);
        }

        $property = Property::create($validatedData);

        return response()->json(['message' => 'Property created successfully!', 'property' => $property], 201);
    }

    public function onboardingStepPropertyDetails(Request $request, $propertyId)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'sqft' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'beds' => 'required|integer',
            'guests' => 'required|integer',
            'minNights' => 'required|integer',
        ]);

        $property = Property::find($propertyId);
        if (!$property) {
            return response()->json(['message' => 'Property not found.'], 404);
        }

        $property->update($validatedData);

        return response()->json(['message' => 'Property details updated successfully!', 'property' => $property]);
    }


    public function onboardingStepLocation(Request $request, $propertyId)
    {
        $validatedData = $request->validate([
            'location' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        $property = Property::find($propertyId);
        if (!$property) {
            return response()->json(['message' => 'Property not found.'], 404);
        }

        $property->update($validatedData);

        return response()->json(['message' => 'Location details updated successfully!', 'property' => $property]);
    }

    public function onboardingStepRemoteWorkSetup(Request $request, $propertyId)
    {
        $validatedData = $request->validate([
            'standingDesk' => 'boolean',
            'ergonomicChair' => 'boolean',
            'externalMonitor' => 'boolean',
            'externalKeyboard' => 'boolean',
            'externalMouse' => 'boolean',
            'officeChair' => 'boolean',
            'officeDesk' => 'boolean',
            'officeLamp' => 'boolean',
        ]);

        $property = Property::find($propertyId);
        if (!$property) {
            return response()->json(['message' => 'Property not found.'], 404);
        }

        $property->update($validatedData);

        return response()->json(['message' => 'Remote work setup updated successfully!', 'property' => $property]);
    }

    public function onboardingStepPhotos(Request $request, $propertyId)
    {
        // This is a placeholder for your file upload logic
        // You might save file paths in a 'photos' column or a related table

        return response()->json(['message' => 'Photos added/updated successfully!']);
    }


}
