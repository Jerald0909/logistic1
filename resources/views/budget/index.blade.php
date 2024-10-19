<!-- resources/views/budget/index.blade.php -->
@extends('layouts.app')

@section('title', 'Budget Planning')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Budget Planning</h1>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <!-- Budget Summary Cards -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fas fa-dollar-sign"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Planned Budget</span>
            <span class="info-box-number">$50,000</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="fas fa-chart-line"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Spent Budget</span>
            <span class="info-box-number">$30,000</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="fas fa-exclamation-triangle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Remaining Budget</span>
            <span class="info-box-number">$20,000</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Budget Breakdown Table -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Budget Breakdown</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Planned Budget</th>
                  <th>Spent</th>
                  <th>Remaining</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Marketing</td>
                  <td>$20,000</td>
                  <td>$12,000</td>
                  <td>$8,000</td>
                </tr>
                <tr>
                  <td>Operations</td>
                  <td>$15,000</td>
                  <td>$10,000</td>
                  <td>$5,000</td>
                </tr>
                <tr>
                  <td>Research</td>
                  <td>$10,000</td>
                  <td>$5,000</td>
                  <td>$5,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
