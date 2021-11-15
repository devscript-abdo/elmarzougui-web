<?php

namespace App\Collections\Post;

use Illuminate\Database\Eloquent\Collection;

class PostCollections extends Collection
{

    public function groupByPosition(): PostCollections
    {
        return $this->groupBy(function ($item) {

            if ($item->featured == true) {
                return 'featured';
            }

            return 'default';
        });
    }

    public function groupByCreatedDate()
    {
        return $this->groupBy(function ($item) {

            if ($item->created_at->isToday()) {
                return 'Today';
            }
            if ($item->created_at->isCurrentWeek()) {
                return 'this week';
            }
            if ($item->created_at->isLastWeek()) {
                return 'Last Week';
            }

            return 'Older';
        });
    }
}
