@extends('layouts.master')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/nestable-style.css')}}">
@endsection

@section('main_content')
<div class="container-fluid">
  <div class="row page-title">
      <div class="col-sm-6">
          <h3>Categories Management</h3>
      </div>
      <div class="col-sm-6">
          <nav>
              <ol class="breadcrumb justify-content-sm-end align-items-center">
                  <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                          <svg class="svg-color">
                              <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                          </svg></a></li>
                  <li class="breadcrumb-item">Categories</li>
                  <li class="breadcrumb-item active">Create</li>
              </ol>
          </nav>
      </div>
  </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-5 col-lg-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    @include('admin.category.list', ['categories' => $categories])
                </div>
            </div>
        </div>
        <div class="col-xxl-7 col-lg-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input" id="categoryForm" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.category.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/nestable/jquery.nestable.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
<script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      function updateToDatabase() {
        idString = $('.dd').nestable('toArray', {
          attribute: 'data-id'
        });
        var orderIndex = [];
        $('#nestable3 li').each(function(index) {
          if ($(this).attr('data-id')) {
            orderIndex.push({
              id: $(this).attr('data-id'),
              order: index
            })
          }
        });
        var mergedArray = Object.values(Object.groupBy([...orderIndex, ...idString],
          ({
            id
          }) => id)).map(e => e.reduce((acc, cur) => ({
          ...acc,
          ...cur
        })));
  
        $.ajax({
          url: '{{ route("admin.category.orders") }}',
          method: 'POST',
          data: {
            categories: mergedArray
          },
          success: function() {
            //
          }
        });
      }
  
      $('.dd').nestable({
        maxDepth: 12
      }).on('change', updateToDatabase);
    })
</script>
@endsection