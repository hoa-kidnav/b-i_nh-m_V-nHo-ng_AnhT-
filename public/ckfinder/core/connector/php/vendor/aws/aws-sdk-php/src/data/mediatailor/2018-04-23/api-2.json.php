<?php
// This file was auto-generated from sdk-root/src/data/mediatailor/2018-04-23/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2018-04-23', 'endpointPrefix' => 'api.mediatailor', 'signingName' => 'mediatailor', 'serviceFullName' => 'AWS MediaTailor', 'serviceId' => 'MediaTailor', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'mediatailor-2018-04-23', 'signatureVersion' => 'v4', 'serviceAbbreviation' => 'MediaTailor', ], 'operations' => [ 'DeletePlaybackConfiguration' => [ 'name' => 'DeletePlaybackConfiguration', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/playbackConfiguration/{Name}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeletePlaybackConfigurationRequest', ], 'errors' => [], ], 'GetPlaybackConfiguration' => [ 'name' => 'GetPlaybackConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/playbackConfiguration/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetPlaybackConfigurationRequest', ], 'output' => [ 'shape' => 'GetPlaybackConfigurationResponse', ], 'errors' => [], ], 'ListPlaybackConfigurations' => [ 'name' => 'ListPlaybackConfigurations', 'http' => [ 'method' => 'GET', 'requestUri' => '/playbackConfigurations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListPlaybackConfigurationsRequest', ], 'output' => [ 'shape' => 'ListPlaybackConfigurationsResponse', ], 'errors' => [], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], ], ], 'PutPlaybackConfiguration' => [ 'name' => 'PutPlaybackConfiguration', 'http' => [ 'method' => 'PUT', 'requestUri' => '/playbackConfiguration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutPlaybackConfigurationRequest', ], 'output' => [ 'shape' => 'PutPlaybackConfigurationResponse', ], 'errors' => [], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], ], ], ], 'shapes' => [ 'BadRequestException' => [ 'type' => 'structure', 'exception' => true, 'error' => [ 'httpStatusCode' => 400, ], ], 'CdnConfiguration' => [ 'type' => 'structure', 'members' => [ 'AdSegmentUrlPrefix' => [ 'shape' => '__string', ], 'ContentSegmentUrlPrefix' => [ 'shape' => '__string', ], ], ], 'HlsConfiguration' => [ 'type' => 'structure', 'members' => [ 'ManifestEndpointPrefix' => [ 'shape' => '__string', ], ], ], 'DashConfiguration' => [ 'type' => 'structure', 'members' => [ 'ManifestEndpointPrefix' => [ 'shape' => '__string', ], 'MpdLocation' => [ 'shape' => '__string', ], ], ], 'DashConfigurationForPut' => [ 'type' => 'structure', 'members' => [ 'MpdLocation' => [ 'shape' => '__string', ], ], ], 'DeletePlaybackConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'Name', ], ], 'required' => [ 'Name', ], ], 'GetPlaybackConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'Name', ], ], 'required' => [ 'Name', ], ], 'GetPlaybackConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'AdDecisionServerUrl' => [ 'shape' => '__string', ], 'CdnConfiguration' => [ 'shape' => 'CdnConfiguration', ], 'DashConfiguration' => [ 'shape' => 'DashConfiguration', ], 'HlsConfiguration' => [ 'shape' => 'HlsConfiguration', ], 'Name' => [ 'shape' => '__string', ], 'PlaybackConfigurationArn' => [ 'shape' => '__string', ], 'PlaybackEndpointPrefix' => [ 'shape' => '__string', ], 'SessionInitializationEndpointPrefix' => [ 'shape' => '__string', ], 'SlateAdUrl' => [ 'shape' => '__string', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], 'TranscodeProfileName' => [ 'shape' => '__string', ], 'VideoContentSourceUrl' => [ 'shape' => '__string', ], ], ], 'PlaybackConfiguration' => [ 'type' => 'structure', 'members' => [ 'AdDecisionServerUrl' => [ 'shape' => '__string', ], 'CdnConfiguration' => [ 'shape' => 'CdnConfiguration', ], 'DashConfiguration' => [ 'shape' => 'DashConfiguration', ], 'HlsConfiguration' => [ 'shape' => 'HlsConfiguration', ], 'Name' => [ 'shape' => '__string', ], 'PlaybackConfigurationArn' => [ 'shape' => '__string', ], 'PlaybackEndpointPrefix' => [ 'shape' => '__string', ], 'SessionInitializationEndpointPrefix' => [ 'shape' => '__string', ], 'SlateAdUrl' => [ 'shape' => '__string', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], 'TranscodeProfileName' => [ 'shape' => '__string', ], 'VideoContentSourceUrl' => [ 'shape' => '__string', ], ], ], 'ListPlaybackConfigurationsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => '__integerMin1Max100', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'ListPlaybackConfigurationsResponse' => [ 'type' => 'structure', 'members' => [ 'Items' => [ 'shape' => '__listOfPlaybackConfigurations', ], 'NextToken' => [ 'shape' => '__string', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], 'required' => [ 'ResourceArn', ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], ], 'PutPlaybackConfigurationRequest' => [ 'type' => 'structure', 'members' => [ 'AdDecisionServerUrl' => [ 'shape' => '__string', ], 'CdnConfiguration' => [ 'shape' => 'CdnConfiguration', ], 'DashConfiguration' => [ 'shape' => 'DashConfigurationForPut', ], 'Name' => [ 'shape' => '__string', ], 'SlateAdUrl' => [ 'shape' => '__string', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], 'TranscodeProfileName' => [ 'shape' => '__string', ], 'VideoContentSourceUrl' => [ 'shape' => '__string', ], ], ], 'PutPlaybackConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'AdDecisionServerUrl' => [ 'shape' => '__string', ], 'CdnConfiguration' => [ 'shape' => 'CdnConfiguration', ], 'DashConfiguration' => [ 'shape' => 'DashConfiguration', ], 'HlsConfiguration' => [ 'shape' => 'HlsConfiguration', ], 'Name' => [ 'shape' => '__string', ], 'PlaybackConfigurationArn' => [ 'shape' => '__string', ], 'PlaybackEndpointPrefix' => [ 'shape' => '__string', ], 'SessionInitializationEndpointPrefix' => [ 'shape' => '__string', ], 'SlateAdUrl' => [ 'shape' => '__string', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], 'TranscodeProfileName' => [ 'shape' => '__string', ], 'VideoContentSourceUrl' => [ 'shape' => '__string', ], ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], 'required' => [ 'ResourceArn', 'Tags', ], ], 'TagsModel' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], 'required' => [ 'Tags', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => '__listOf__string', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], 'required' => [ 'ResourceArn', 'TagKeys', ], ], '__boolean' => [ 'type' => 'boolean', ], '__double' => [ 'type' => 'double', ], '__integer' => [ 'type' => 'integer', ], '__listOfPlaybackConfigurations' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlaybackConfiguration', ], ], '__listOf__string' => [ 'type' => 'list', 'member' => [ 'shape' => '__string', ], ], '__long' => [ 'type' => 'long', ], '__mapOf__string' => [ 'type' => 'map', 'key' => [ 'shape' => '__string', ], 'value' => [ 'shape' => '__string', ], ], '__string' => [ 'type' => 'string', ], '__integerMin1Max100' => [ 'type' => 'integer', 'min' => 1, 'max' => 100, ], '__timestampIso8601' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], '__timestampUnix' => [ 'type' => 'timestamp', 'timestampFormat' => 'unixTimestamp', ], ],];
