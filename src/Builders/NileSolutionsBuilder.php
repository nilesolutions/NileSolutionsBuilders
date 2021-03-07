<?php

namespace nilesolutions\NileSolutionsBuilders\Builders;

use Illuminate\Database\Eloquent\Builder;


class NileSolutionsBuilder extends Builder
{
    public function status($status)
    {
        return $this->where(config('nilesolutions_builder.status_field'), $status);
    }

    public function active()
    {
        return $this->status(1);
    }

    public function inactive()
    {
        return $this->where(config('nilesolutions_builder.status_field'), '!=', 1)->orWhereNull(config('nilesolutions_builder.status_field'));
    }

    public function published()
    {
        return $this->where(config('nilesolutions_builder.publish_field'), 1);
    }
}
