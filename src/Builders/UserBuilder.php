<?php

namespace nilesolutions\NileSolutionsBuilders\Builders;

use Carbon\Carbon;

/**
 * Class UserBuilder.
 */
class UserBuilder extends NileSolutionsBuilder
{
    /**
     * @return mixed
     */
    public function todayUser()
    {
        return $this->whereDate('created_at', Carbon::today()->toDateString());
    }

    /**
     * @return mixed
     */
    public function yesterdayUser()
    {
        return $this->whereDate('created_at', Carbon::yesterday()->toDateString());
    }
}
