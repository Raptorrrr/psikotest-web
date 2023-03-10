@extends('pages.test.test-layout', ['activePage' => 'test', 'title' => 'Psikotes Biromarini', 'navName' => 'Test', 'activeButton' => 'test'])

@section('content')
    @include('components.error-alert')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h2 class="font-weight-bold m-0">{{ 'PSIKOTES ' . $questions[0]->session->type->order . ' SUBTEST ' . $questions[0]->session->session }}</h2>
        <h4 class="font-weight-bold m-0" id="timer"></h4>
    </div>

    <form
        id="testForm"
        action="{{ route('test.store', ['slug' => $questions[0]->session->type->slug, 'session' => $questions[0]->session->session]) }}"
        method="POST"
    >
        @csrf
        <input type="hidden" id="is_expired" name="is_expired" value="0">
        <div style="background-color: #BBB9B9">
            <ul class="nav nav-tabs" id="testTab" role="tablist">
                @foreach($questions as $key => $question)
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link @if($key === 0) active @endif"
                            id="question-{{ $key }}-tab"
                            data-toggle="tab"
                            data-target="#question-{{ $key }}"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="@if($key === 0) true @else false @endif"
                        >
                            {{ $question->order }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            @foreach($questions as $key => $question)
                <input type="hidden" name="question[]" value="{{ $question->id }}">
                <div
                    class="tab-pane fade @if($key === 0) show active @endif"
                    id="question-{{ $key }}"
                    role="tabpanel"
                    aria-labelledby="question-{{ $key }}-tab"
                >
                    <table class="table table-hover mt-2">
                        <tbody>
                        @if(strtolower($question->session->type->slug) != 'epps')
                            <tr class="bg-light">
                                <td class="justify-content-center">
                                    @if($question->question === null)
                                        @if($question->is_import === 1)
                                            <img
                                                src="{{ asset('images/' . $question->session->type->slug . '/' . $question->session->session . '/' . $question->id . '.png') }}"
                                                style="max-height: 500px;"
                                                alt="question_image"
                                            >
                                        @else
                                            <img
                                                src="{{ Storage::url($question->image) }}"
                                                style="max-height: 500px;"
                                                alt="question_image"
                                            >
                                        @endif
                                    @else
                                        @if(strtolower($question->session->type->slug) == 'skb')
                                            <table class="table table-bordered mx-auto" style="width: 50%">
                                                <tr>
                                                    <th colspan="{{ count($question->choices) }}">
                                                        Kolom {{ (floor(($question->order - 1) / 10)) + 1 }}
                                                    </th>
                                                </tr>
                                                <tr>
                                                    @foreach($question->choices as $choice)
                                                        <td @if($question->session->session === 3) class="webdings" @endif>{{ $choice->value }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach($question->choices as $choice)
                                                        <td class="font-weight-bold">{{ $choice->choice }}</td>
                                                    @endforeach
                                                </tr>
                                            </table>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endif
                        @if(strtolower($question->session->type->slug) == 'skb')
                            <tr class="bg-light">
                                <td class="justify-content-center text-center">
                                    <h2 @if($question->session->session === 3) class="webdings" @endif>{!! $question->question !!}</h2>
                                </td>
                            </tr>
                        @endif
                        @foreach($question->choices as $keyChoice => $choice)
                            <tr>
                                <td>
                                    <div class="form-group mb-0">
                                        @if($question->session->type->slug == 'cfit' && $question->session->session == 2)
                                            <div class="form-check mb-0">
                                                <label class="form-check-label">
                                                    <input
                                                        class="form-check-input checkbox-option checkbox-order-{{ $key }}"
                                                        type="checkbox"
                                                        name="answers[{{ $key }}][{{ $keyChoice }}]"
                                                        {{
                                                            ((is_array(old('answers'))
                                                            && array_key_exists($key, old('answers', [])))
                                                            && array_key_exists($keyChoice, old('answers', [])[$key]))
                                                            && $choice->choice == old('answers', [])[$key][$keyChoice]
                                                            ? ' checked'
                                                            : ''
                                                        }}
                                                        value="{{ $choice->choice }}"
                                                    >
                                                    <span class="form-check-sign"></span>
                                                    <p class="font-weight-bold">
                                                        {{ $choice->choice }}
                                                    </p>
                                                </label>
                                            </div>
                                        @else
                                            <div class="form-check form-check-radio mb-0">
                                                <label class="form-check-label">
                                                    <input
                                                        class="form-check-input radio-option"
                                                        type="radio"
                                                        name="answers[{{ $key }}]"
                                                        {{
                                                            (is_array(old('answers'))
                                                            && array_key_exists($key, old('answers', [])))
                                                            && $choice->choice == old('answers', [])[$key]
                                                            ? ' checked'
                                                            : ''
                                                        }}
                                                        value="{{ $choice->choice }}"
                                                    >
                                                    <span class="form-check-sign"></span>
                                                    <p class="font-weight-bold">
                                                        {{
                                                            strtolower($question->session->type->slug) == 'epps'
                                                            ? $choice->choice . '. ' . $choice->value
                                                            : $choice->choice
                                                        }}
                                                    </p>
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- Button for Last Question -->
                    @if ($key === count($questions) - 1)
                        <div class="pull-right mb-5">
                            <button type="submit" class="btn btn-main btn-fill">
                                <span>Simpan</span>
                            </button>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </form>
@endsection

@push('js')
    <script>
        const finish_at = new Date({!! json_encode($start_at) !!})
        finish_at.setSeconds(finish_at.getSeconds() + {!! json_encode($session_time) !!})

        const x = setInterval(function () {
            const now = new Date();

            const distance = finish_at.getTime() - now.getTime()

            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
            const seconds = Math.floor((distance % (1000 * 60)) / 1000)

            document.getElementById('timer').innerHTML = minutes + ' menit ' + seconds + ' detik'
            if(distance < 0) {
                clearInterval(x)
                document.getElementById('timer').innerHTML = '<div class="text-danger">EXPIRED</div>'
                document.getElementById('is_expired').value = '1'
                document.forms["testForm"].submit();
            }
        }, 1000)

        //Limiting checkbox
        const limit = 2
        const dictionary = Array({!! json_encode(count($questions)) !!}).fill(0)
        $('.checkbox-option').on('change', function (e) {
            const nameInput = $(this).attr('name')
            const split_name = nameInput.split('[')
            const key_order = parseInt(split_name[1].charAt(0));

            if ($('.checkbox-order-'+ key_order +':checked').length > limit && dictionary[key_order] >= limit) {
                $(this).prop('checked', false);
            }else{
                if($(this).is(':checked')) {
                    dictionary[key_order]++;
                }
                else {
                    dictionary[key_order]--;
                }
            }
        });

        $('.radio-option').on('change', function (e) {
            const nameInput = $(this).attr('name')
            const split_name = nameInput.split('[')
            const question_order = parseInt(split_name[1].charAt(0));
            const value = $(this).val()

            // old_answers.push(val)
            console.log(old_answers)
        });
    </script>
@endpush
