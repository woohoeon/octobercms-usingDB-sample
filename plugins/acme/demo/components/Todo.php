<?php namespace Acme\Demo\Components;

use Cms\Classes\ComponentBase;
use Acme\Demo\Models\Task;

class Todo extends ComponentBase
{
    /**
    *   This is a person's name.
    *   @var string
    */
    public $name;

    /**
    *   This collection of tasks.
    *   @var array
    */
    public $tasks;

    public function componentDetails()
    {
        return [
            'name'        => 'Todo Component',
            'description' => 'A database driven ToDo List'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        // This will execute when the component is
        // first initialized, including AJAX events.
    }

    public function onRun()
    {
        // This code will not execute for AJAX events

        // {{ todoList.name}} (Strict)
        $this->name = 'Samuel';

        // {% set name = todoList.name %}

        $this->tasks = [
            'Clean the garage',
            'Take out the garbage',
            'Unstack the dishwasher'
        ];

        $this->tasks = Task::lists( 'title' );

        // {{ name }} (Relaxed)
        // $this->page['name'] = 'Samuel';

        // Both
        // $this->name = $this->page['name'] = 'Samuel';

    }

    public function onAddItem()
    {
        $taskName = post( 'task' );
        $task = new Task;
        $task->title = $taskName;
        $task->save();

        $this->page['tasks'] = Task::lists( 'title' );
    }
}
