<?php

namespace Core\BoundedContext\Course\Domain;

use Core\BoundedContext\Course\Domain\ValueObjects\CourseId;
use Core\BoundedContext\Course\Domain\ValueObjects\CourseName;


class Course {
    public function __construct( CourseId $id,  CourseName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function id(): CourseId {
        return $this->id;
    }

    public function name(): CourseName {
        return $this->name;
    }


}
