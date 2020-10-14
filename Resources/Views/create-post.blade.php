@extends( 'layout.dashboard' )

@section( 'layout.dashboard.body' )
    <div>
        @include( '/common/dashboard-header' )
        <div class="px-4 flex-auto flex flex-col" id="dashboard-content">
            <div class="page-inner-header mb-4">
                <h3 class="text-3xl text-gray-800 font-bold">{{ __( 'Write Post' ) }}</h3>
                <p class="text-gray-600">{{ __( 'Write a new post.' ) }}</p>
            </div>
            <div>
                <div class="input-group border-2 border-blue-400 rounded flex">
                    <input type="text" class="p-2 bg-white flex-auto">
                    <button class="bg-blue-400 text-white px-3 py-2">{{ __( 'Save' ) }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection