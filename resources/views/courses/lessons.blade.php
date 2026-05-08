@extends('layouts.admin')



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Course Lessons</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Courses</li>
                <li class="breadcrumb-item active">Lessons</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Lessons List</h5>

                        <div class="list-group">



                            <div class="list-group-item d-flex justify-content-between align-items-center">

                                <div>
                                    <h6 class="mb-1"> $lesson title </h6>
                                    <small>lesson description </small>
                                </div>

                                <span class="badge bg-primary rounded-pill">
                                    min
                                </span>

                            </div>



                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
