@extends('layouts.admin')



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Course Students</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Courses</li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Enrolled Students</h5>

                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined At</th>
                                    <th>Courses</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td> student id </td>
                                    <td> student name </td>
                                    <td> student email </td>
                                    <td> student Course at </td>
                                    <td> student created at </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
