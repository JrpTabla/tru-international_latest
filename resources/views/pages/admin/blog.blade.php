@extends('header.admin_header')

@section('content')

<link rel="stylesheet" href="{{ asset ('assets/css/admin/admin_blog/admin_blog.css') }}">

<div class="main">
    <h1>Company Blog</h1>

    <div class="main-body">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5%">id</th>
                    <th style="width: 15%">Title</th>
                    <th style="width: 25%">Description</th>
                    <th style="width: 15%">Tag</th>
                    <th style="width: 10%">Date Created</th>
                    <th style="width: 10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="content_id">1</th>
                    <td class="content_title">Portfolio Diversification: Strategies and Why You Need It</td>
                    <td class="content_Description">A diverse investment portfolio is protected from volatile price movements and market fluctuations. For this reason, traders have devised various diversification strategies to help secure their investments in a way that best suits their style.</td>
                    <td class="content_Tag">Trading Practices, Market Safety</td>
                    <td class="content_Created_date">@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
               
            </tbody>
        </table>
    </div>
</div>




@endsection