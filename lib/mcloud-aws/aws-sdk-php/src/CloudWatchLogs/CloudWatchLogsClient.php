<?php

namespace MediaCloud\Vendor\Aws\CloudWatchLogs;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Logs** service.
 *
 * @method \MediaCloud\Vendor\Aws\Result associateKmsKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateKmsKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelExportTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createExportTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createExportTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLogGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLogGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLogStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLogStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLogGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLogGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLogStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLogStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMetricFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMetricFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteQueryDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteQueryDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRetentionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRetentionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSubscriptionFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSubscriptionFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDestinations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDestinationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeExportTasks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLogGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLogGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLogStreams(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLogStreamsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMetricFilters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMetricFiltersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeQueries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeQueriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeQueryDefinitions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeQueryDefinitionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResourcePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourcePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSubscriptionFilters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSubscriptionFiltersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateKmsKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateKmsKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result filterLogEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise filterLogEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLogEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLogEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLogGroupFields(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLogGroupFieldsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLogRecord(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLogRecordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueryResults(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsLogGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsLogGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDestinationPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDestinationPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putLogEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putLogEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMetricFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMetricFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putQueryDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putQueryDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRetentionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRetentionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putSubscriptionFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putSubscriptionFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagLogGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagLogGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result testMetricFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise testMetricFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagLogGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagLogGroupAsync(array $args = [])
 */
class CloudWatchLogsClient extends AwsClient {}
