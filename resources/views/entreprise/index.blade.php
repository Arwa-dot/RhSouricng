@extends('layouts.app')
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif

    <section class="header-inner header-inner-big bg-holder text-white" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div >
                            <form class="form row">
                                <div class="col-lg-5 col-md-4">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" name="titre_emploi" placeholder="Quoi?">
                                         </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group left-icon mb-md-0">
                                        <input type="text" class="form-control" name="ville_emploi" placeholder="Où?">
                                       </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="form-group form-action mb-0">
                                        <button type="submit" class="btn btn-primary mt-0"> Chercher</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <!--=================================
                sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="search">
                                <i class="fas fa-search"></i>
                                <input class="form-control" type="text" placeholder="Search Keywords">
                            </div>
                        </div>
                        <div class="widget">
                            <div class="locations">
                                <i class="far fa-compass"></i>
                                <input class="form-control" type="text" placeholder="All Locations">
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Date Posted</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="dateposted">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="dateposted1">
                                        <label class="custom-control-label" for="dateposted1">Last hour</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="dateposted2">
                                        <label class="custom-control-label" for="dateposted2">Last 24 hour</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="dateposted3">
                                        <label class="custom-control-label" for="dateposted3">Last 7 days</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="dateposted4">
                                        <label class="custom-control-label" for="dateposted4">Last 14 days</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="dateposted5">
                                        <label class="custom-control-label" for="dateposted5">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Specialism</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="specialism">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="specialism1">
                                        <label class="custom-control-label" for="specialism1">IT Contractor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="specialism2">
                                        <label class="custom-control-label" for="specialism2">Charity & Voluntary</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="specialism3">
                                        <label class="custom-control-label" for="specialism3">Digital & Creative</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="specialism4">
                                        <label class="custom-control-label" for="specialism4">Estate Agency</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="specialism5">
                                        <label class="custom-control-label" for="specialism5">Graduate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Job Type</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="jobtype">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox fulltime-job">
                                        <input type="checkbox" class="custom-control-input" id="jobtype1">
                                        <label class="custom-control-label" for="jobtype1">Full Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox parttime-job">
                                        <input type="checkbox" class="custom-control-input" id="jobtype2">
                                        <label class="custom-control-label" for="jobtype2">Part-Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox freelance-job">
                                        <input type="checkbox" class="custom-control-input" id="jobtype3">
                                        <label class="custom-control-label" for="jobtype3">Freelance</label>
                                    </div>
                                    <div class="custom-control custom-checkbox temporary-job">
                                        <input type="checkbox" class="custom-control-input" id="jobtype4">
                                        <label class="custom-control-label" for="jobtype4">Temporary</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Experience</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience"> <i class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="experience">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="experience1">
                                        <label class="custom-control-label" for="experience1">Fresher</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="experience2">
                                        <label class="custom-control-label" for="experience2">Less than 1 year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="experience3">
                                        <label class="custom-control-label" for="experience3">2 Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="experience4">
                                        <label class="custom-control-label" for="experience4">3 Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="experience5">
                                        <label class="custom-control-label" for="experience5">4 Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Offered Salary</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary"> <i class="fas fa-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="Offeredsalary">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Offeredsalary1">
                                        <label class="custom-control-label" for="Offeredsalary1">10k - 20k</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Offeredsalary2">
                                        <label class="custom-control-label" for="Offeredsalary2">20k - 30k</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Offeredsalary3">
                                        <label class="custom-control-label" for="Offeredsalary3">30k - 40k</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Offeredsalary4">
                                        <label class="custom-control-label" for="Offeredsalary4">40k - 50k</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Offeredsalary5">
                                        <label class="custom-control-label" for="Offeredsalary5">50k - 60k</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Gender</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender"><i class="fas fa-chevron-down"></i></a>
                            </div>
                            <div class="collapse show" id="gender">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="gender1">
                                        <label class="custom-control-label" for="gender1">Male</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="gender2">
                                        <label class="custom-control-label" for="gender2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Qualification</h6>
                                <a class="ml-auto" data-toggle="collapse" href="#qualification" role="button" aria-expanded="false" aria-controls="qualification"> <i class="fas fa-chevron-down"></i></a>
                            </div>
                            <div class="collapse show" id="qualification">
                                <div class="widget-content">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="qualification1">
                                        <label class="custom-control-label" for="qualification1">Matriculation</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="qualification2">
                                        <label class="custom-control-label" for="qualification2">Intermediate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="qualification3">
                                        <label class="custom-control-label" for="qualification3">Graduate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-add">
                                <img class="img-fluid" src="images/add-banner.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-9">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-8 of <span class="text-primary">28 Employer</span></h6>
                        </div>
                    </div>
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        <div class="job-alert-bt"> <a class="btn btn-dark" href="#"><i class="fa fa-envelope"></i>Get job alert </a> </div>
                        <div class="job-shortby ml-sm-auto d-flex align-items-center mt-3 mt-sm-0">

                                <div class="form-group mb-0">
                                    <label class="justify-content-start mr-2">Sort by :</label>
                                    <div class="short-by">
                                        <select class="form-control basic-select">
                                            <option>Newest</option>
                                            <option>Oldest</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @foreach($entreprises as $entreprise)


                    <div class="employers-list">
                        <div class="employers-list-logo">
                            <img class="img-fluid" src="images/svg/01.svg" alt="">
                        </div>
                        <div class="employers-list-details">
                            <div class="employers-list-info">
                                <div class="employers-list-title">
                                    <h5 class="mb-0"><a href="employer-detail.html">{{ $entreprise->nom_entreprise }}</a></h5>
                                </div>
                                <div class="employers-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-filter pr-1"></i>{{ $entreprise->domaine }}/li>
                                        <li><i class="fas fa-map-marker-alt pr-1"></i>{{ $entreprise->adresse_complete }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="employers-list-position">
                            <a class="btn btn-sm btn-dark" href="{{ route('entreprise.show',$entreprise->id) }}">17 Open position</a>
                        </div>
                        @endforeach  </div>

                </div> </div></div></section>



                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-sm-5">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">25</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </div>
                    </div>
                </div> </div> </div>
            </div>
        </div>
    </section>
  @endsection