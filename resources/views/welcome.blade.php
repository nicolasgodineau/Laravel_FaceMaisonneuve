@extends ('layout.app')
@section('title', 'Welcome')
@section('content')


    <div class="container flex flex-col items-center justify-evenly pt-6 gap-4 text-Violetfoncer">
        <div>
            <h1 class="flex_col_itemCenter_justifyCenter titre_H1 p-4">@lang('lang.welcome')</h1>
            <p class="font-semibold text-center">
                @lang('lang.titre_index')
            </p>
        </div>
        <div class="w-[60ch] flex flex-col justify-center gap-4 pt-8">
            <p>
                @lang('lang.text_presentation_1')
            </p>
            <p>
                @lang('lang.text_presentation_2')
            </p>
            <p>
                @lang('lang.text_presentation_3')
            </p>
            <p>
                @lang('lang.text_presentation_4')
            </p>

        </div>
    </div>

    </div>

@endsection
