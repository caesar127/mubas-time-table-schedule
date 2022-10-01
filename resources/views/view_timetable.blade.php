@extends('components/Ulayout')
@section('content')
<style>.grid-container {
    display: grid;
    grid-template-columns: auto auto;
    margin: 10px;
  }
  .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    margin: 20px;
    font-size: 30px;
    width: 250px;
    height: 115px;
    text-align: center;
  }
</style>

<div class="grid-container">
    <div class="grid-item" style="display: flex; justify-content: space-between;">
      <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
        <img src="images/icons8-faculty-100.png" alt="" width="80px">
      </div>
      <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
        <p>Faculties</p>
      </div>
    </div>
</div>

@endsection