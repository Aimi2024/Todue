<x-app>
    <x-header>
        <h1 class="text-white fw-bold text-center">Todue</h1>
    </x-header>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 px-3 gap-3 justify-content-center">
            {{-- Task Section --}}
            <div class="col-md-6 bg-orange rounded-3 p-3">
                <h2 class="text-white">Task</h2>

                {{-- Search & Add --}}
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" placeholder="Search Task" />
                    <span class="input-group-text rounded-end-2"><i class="bi bi-search"></i></span>
                    <button type="button" class="text-white bg-green px-3 btn btn-md rounded-2 ms-2"
                        data-bs-toggle="modal" data-bs-target="#addtask">
                        Add Task
                    </button>
                </div>

                {{-- Task Item --}}
                <div class="d-flex justify-content-between align-items-center bg-white rounded-2 p-2">
                    <div class="d-flex align-items-center gap-2">
                        <input class="form-check-input" type="checkbox" />
                        <h5 class="mb-0">Task 1</h5>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                            data-bs-target="#edittask">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-archive"></i>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Second Box --}}
            <div class="col-md-3 bg-orange rounded-3 p-3 ">
                <h2 class="text-center mb-2">Task Details</h2>

                <div class="row">
                    <h6>
                        Task Title
                    </h6>
                </div>
                <div class="row">
                    <h6> Task Description</h6>
                </div>
                <div class="row">
                    <h6> Date Created</h6>
                </div>
                <div class="row text-center">
                    <h6> Task Importance </h6>
                </div>
            </div>
        </div>

        <x-modal id="addtask" title="Add Task">
            <div class="modal-body ">
                <form class="">
                    <div class="mb-3">
                        <label for="taskTitle" class="col-form-label">Task Title:</label>
                        <input type="text" class="form-control" id="taskTitle">
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="col-form-label">Task Description:</label>
                        <textarea class="form-control" id="taskDescription"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="taskImportance" class="col-form-label">Task Importance:</label>
                        <select class="form-select" id="taskImportance">
                            <option value="" disabled selected>Select Importance</option>
                            <option value="1">Low</option>
                            <option value="2">Medium</option>
                            <option value="3">High</option>
                        </select>
                    </div>
                </form>
            </div>
        </x-modal>

        <x-modal id="edittask" title="Edit Task">
            <div class="modal-body ">
                <form class="">
                    <div class="mb-3">
                        <label for="taskTitle" class="col-form-label">Task Title:</label>
                        <input type="text" class="form-control" id="taskTitle">
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="col-form-label">Task Description:</label>
                        <textarea class="form-control" id="taskDescription">
                            
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="taskImportance" class="col-form-label">Task Importance:</label>
                        <select class="form-select" id="taskImportance">
                            <option value="" disabled selected>Select Importance</option>
                            <option value="1">Low</option>
                            <option value="2">Medium</option>
                            <option value="3">High</option>
                        </select>
                    </div>
                </form>
            </div>
        </x-modal>
</x-app>
