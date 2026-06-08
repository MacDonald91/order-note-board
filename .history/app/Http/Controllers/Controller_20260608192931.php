<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}<?php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}namespace App\Http\Controllers;
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}abstract class Controller
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}{
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}    //
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Return all notes, newest first.
     */
    public function index()
    {
        return response()->json(
            Note::latest()->get()
        );
    }

    /**
     * Validate and store a new note.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $note = Note::create($validated);

        return response()->json($note, 201);
    }
}