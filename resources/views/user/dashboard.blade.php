@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $items)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $items->Camp->title }}</strong>
                            </p>
                            <p>
                                {{ $items->created_at->format('M d, Y') }}
                            </p>
                        </td>
                        <td>
                            <strong>{{ $items->total }}
                            @if ($items->discount_id)
                                <span class="badge bg-success">Disc {{ $items->discount_percentage }}%</span>
                            @endif
                            </strong>
                        </td>
                        <td>
                           <strong>{{ $items->payment_status }}</strong>
                        </td>
                        <td>
                            @if ($items->payment_status == 'waiting')
                                <a href="{{ $items->midtrans_url }}" class="btn btn-primary">Pay Here</a>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/081389894776?text=Hi, Saya ingin bertanya tentang kelas {{ $items->Camp->title }}" class="btn btn-primary">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5"><h3>No Camp Register</h3></td>
                        </tr> 
                    @endforelse                   
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection