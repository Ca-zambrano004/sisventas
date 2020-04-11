@extends('layouts.app')

@section('title', 'SofySHOP | Dashboard')

@section('body-class', 'profile-page ')

@section('contenido')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('assets/img/home.jpg') }}')">
</div>
  
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Dashboard</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                      
                <ul class="nav nav-pills nav-pills-icons nav-pills-info" role="tablist">
                    <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                   
                    <li class="nav-item">
                        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                            <i class="material-icons">add_shopping_cart</i>
                                <b> Carrito de compras </b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                                <b> Listado de productos </b>
                        </a>
                    </li>
                </ul>


                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="dashboard-1">
                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                      <br><br>
                      Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                    <div class="tab-pane" id="schedule-1">
                      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                      <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                    </div>
                    <div class="tab-pane" id="tasks-1">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                    </div>
                </div>
        </div>
    </div>
</div>


@include('includes.footer')
@endsection