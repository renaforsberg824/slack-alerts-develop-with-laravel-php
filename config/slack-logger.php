<?php

return [
    /**
     * The webhooks URL that we'll use to send a message to Slack.
     */
    'webhook_url' => '',

    'job' => Spatie\SlackLogger\Jobs\SendToSlackChannelJob::class,
];
