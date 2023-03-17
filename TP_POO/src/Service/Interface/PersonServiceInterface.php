<?php

namespace Service;

use App\Entity\Student;
use App\Entity\Teacher;

interface PersonServiceInterface
{
    public function createTeacher(string $name, string $lastname, string $email, string $password);
    public function readTeacher(string $email, array $teachers);
    public function updateTeacher(Teacher $teacher, string $name, string $lastname, string $email, string $password);
    public function deleteTeacher(string $email, array $teachers);

    public function createStudent(string $name, string $lastname, string $email, string $password);
    public function readStudent(string $email, array $teachers);
    public function updateStudent(Student $student, string $name, string $lastname, string $email, string $password);
    public function deleteStudent(string $email, array $students);
}