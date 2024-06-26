<?php

namespace App\PullRequest\Domain\Gateway;

use App\PullRequest\Domain\Aggregate\PullRequest\PullRequest;
use App\PullRequest\Domain\Aggregate\PullRequest\PullRequestDiff;
use App\PullRequest\Domain\Aggregate\PullRequest\PullRequestId;

interface PullRequestRepositoryInterface
{
    public function find(PullRequestId $pullRequestId): ?PullRequest;

    public function update(PullRequest $pullRequest): void;

    public function getDiff(PullRequestId $pullRequestId): PullRequestDiff;

    /**
     * @param array<string, array<int, string|null>> $newTranslations
     * @param string[]                               $newDomains
     */
    public function addTranslationsComment(PullRequestId $pullRequestId, array $newTranslations, array $newDomains): void;
}
