@extends('master')

@section('title')
Rodicia
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-content">
                    <h2>Rodičia</h2>

                    {{--<div class="input-group">
                        <input type="text" placeholder="Hľadať rodiča" class="input form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Hľadať</button>
                                </span>
                    </div>--}}

                    <a href="{{ route('rodic.create') }}" class="btn btn-warning">Pridať nového rodiča</a>

                    <div class="clients-list">
                        <div class="full-height-scroll">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    @forelse($rodicia as $rodic)
                                        <tr>
                                            <td class="client-avatar"><img alt="image" src="{{ asset('img/a2.jpg') }}"> </td>
                                            <td><a href="{{ route('rodic.show', $rodic->id) }}" class="client-link">{{ $rodic->meno }}</a></td>
                                            <td> {{ $rodic->nazov_spolocnosti }}</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> {{ $rodic->email }}</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>no records</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection