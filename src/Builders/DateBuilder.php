<?php

namespace nilesolutions\NileSolutionsBuilders\Builders;

use Carbon\Carbon;

/**
 * Class UserBuilder.
 */
class DateBuilder extends NileSolutionsBuilders
{
    /**
     * @return mixed
     */
    public function month()
    {
        return $this->whereMonth('created_at', 12);
    }

    /**
     * @return mixed
     */
    public function year()
    {
        return $this->whereDate('created_at', Carbon::yesterday()->toDateString());
    }

    public function date()
    {
        return $this->whereDate('created_at', '2017-04-26 17:33:21');
    }
}
