<?php

declare( strict_types = 1);

namespace Core\BoundedContext\Course\Application\Responses;

use Core\BoundedContext\Course\Domain\Course;

final class CourseResponse {

    public function __construct( private string $id, private string $name ) {}

    public static function fromCourse( Course $course) : self{
        return new self(
            $course->id()->value(),
            $course->name()->value()
        );
    }
}

