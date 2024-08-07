<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START clouderrorreporting_v1beta1_generated_ErrorStatsService_ListEvents_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\ErrorReporting\V1beta1\Client\ErrorStatsServiceClient;
use Google\Cloud\ErrorReporting\V1beta1\ErrorEvent;
use Google\Cloud\ErrorReporting\V1beta1\ListEventsRequest;

/**
 * Lists the specified events.
 *
 * @param string $formattedProjectName The resource name of the Google Cloud Platform project. Written
 *                                     as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
 *                                     where `{projectID}` is the [Google Cloud Platform project
 *                                     ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
 *                                     a Cloud region.
 *
 *                                     Examples: `projects/my-project-123`,
 *                                     `projects/my-project-123/locations/global`.
 *
 *                                     For a list of supported locations, see [Supported
 *                                     Regions](https://cloud.google.com/logging/docs/region-support). `global` is
 *                                     the default when unspecified. Please see
 *                                     {@see ErrorStatsServiceClient::projectName()} for help formatting this field.
 * @param string $groupId              The group for which events shall be returned.
 *                                     The `group_id` is a unique identifier for a particular error group. The
 *                                     identifier is derived from key parts of the error-log content and is
 *                                     treated as Service Data. For information about how Service Data
 *                                     is handled, see [Google Cloud Privacy
 *                                     Notice](https://cloud.google.com/terms/cloud-privacy-notice).
 */
function list_events_sample(string $formattedProjectName, string $groupId): void
{
    // Create a client.
    $errorStatsServiceClient = new ErrorStatsServiceClient();

    // Prepare the request message.
    $request = (new ListEventsRequest())
        ->setProjectName($formattedProjectName)
        ->setGroupId($groupId);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $errorStatsServiceClient->listEvents($request);

        /** @var ErrorEvent $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedProjectName = ErrorStatsServiceClient::projectName('[PROJECT]');
    $groupId = '[GROUP_ID]';

    list_events_sample($formattedProjectName, $groupId);
}
// [END clouderrorreporting_v1beta1_generated_ErrorStatsService_ListEvents_sync]
