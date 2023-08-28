@extends('layouts.app')


@section('content')


    <div class="i-f-w min-vh-50 d-flex align-items-center"
        style="--img: url(/images/new_images/pages/deposit_withdrawal_methods.webp)">

        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('Deposit and Withdrawal Methods')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('Highness Investment LLC offers various deposit methods, including wire transfer, credit/debit cards, and online payment systems. Withdrawals are processed through the same methods and are subject to certain conditions and fees. Clients can choose the most convenient method for their transactions.')</p>
                </div>
            </div>
        </div>

    </div>

    <section >
        <div class="container">
            <center>
                @lang('We accept deposits by:')
                <button type="button" data-id="hide01"
                    class="button60 btn btn-outline-primary btn_show_items_deposit_withdrawal_methods">@lang('Deposits')</button>
                <button type="button" data-id="hide02"
                    class="button60 mt-0 btn btn-outline-primary btn_show_items_deposit_withdrawal_methods">@lang('Withdrawals')</button>
            </center>
            <br>


            <div class="table-responsive items_deposit_withdrawal_methods">
                <table id="hide01" cellpadding="0" cellspacing="0"
                    class="table  whiteBG table fundingMethodstable table-bordered table-striped spaceWrap table_toggle">
                    <thead>
                        <tr>
                            <th>@lang('Funding Options')</th>
                            <th>@lang('Min Deposit')</th>
                            <th>@lang('Max Deposit')</th>
                            <th>@lang('Fees') </th>
                            <th>@lang('Processing time') </th>
                            <th>@lang('Accepted Currencies') </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tbody2">
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTS00MjguNCAyOTEuNmgtMzBhMi4yMiAyLjIyIDAgMCAxLTIuMi0yLjJ2LTE3LjhhMi4yMiAyLjIyIDAgMCAxIDIuMi0yLjJoMzBhMi4yMiAyLjIyIDAgMCAxIDIuMiAyLjJ2MTcuOGMuMSAxLjItMSAyLjItMi4yIDIuMnoiIGZpbGw9IiMzMjM3M2MiLz48cGF0aCBkPSJNLTQ1Ny42IDI4NS45aC0xbC44LTMuMWgtMS4xbC4yLS43aDMuMmwtLjIuN2gtMS4xYzAgMC0uOCAzLjEtLjggMy4xem0zLjMtMS40bC0uNCAxLjVoLTFsMS0zLjhoMS4xYy41IDAgLjkuMSAxLjEuMy4zLjIuNC40LjQuOCAwIC4zLS4xLjUtLjMuN3MtLjQuMy0uOC40bC44IDEuNmgtMWwtLjctMS41aC0uMiAwem0uMS0uN2guMmMuMyAwIC41IDAgLjYtLjFzLjItLjIuMi0uNGMwLS4xLS4xLS4yLS4yLS4zcy0uMy0uMS0uNS0uMWgtLjJsLS4xLjloMHptNS4xIDEuMmgtMS41bC0uNS45aC0xbDIuNC0zLjhoMS4ybC41IDMuOGgtLjljLS4xIDAtLjItLjktLjItLjl6bTAtLjZsLS4xLS45di0uNy0uMWMtLjEuMi0uMi40LS4zLjdsLS42IDFoMSAwem01LjUgMS41aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjhoMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjJoLjlsLTEgMy44aDB6bTQuMS0xLjFjMCAuNC0uMi42LS41LjktLjMuMi0uNy4zLTEuMy4zLS41IDAtLjgtLjEtMS4xLS4ydi0uN2MuNC4yLjguMyAxLjEuMy4yIDAgLjQgMCAuNi0uMS4xLS4xLjItLjIuMi0uM3YtLjJjMC0uMS0uMS0uMS0uMS0uMi0uMSAwLS4yLS4xLS40LS4zLS4zLS4yLS41LS4zLS42LS41cy0uMi0uMy0uMi0uNS4xLS40LjItLjYuMy0uMy42LS40Yy4yLS4xLjUtLjEuOC0uMS41IDAgLjkuMSAxLjMuM2wtLjMuNmMtLjMtLjEtLjYtLjItLjktLjItLjIgMC0uMyAwLS40LjFzLS4yLjItLjIuMyAwIC4yLjEuMy4yLjIuNS4zLjQuMy42LjVjMCAwIDAgLjIgMCAuNGgwem0xLjggMS4xaC0xbDEtMy44aDIuNmwtLjIuN2gtMS42bC0uMyAxaDEuNWwtLjIuN2gtMS41bC0uMyAxLjRoMHptNS4yIDBoLTIuNmwxLTMuOGgyLjZsLS4yLjdoLTEuNmwtLjIuOGgxLjVsLS4yLjdoLTEuNWwtLjMgMWgxLjZsLS4xLjZoMHptMi40LTEuNGwtLjQgMS41aC0xbDEtMy44aDEuMWMuNSAwIC45LjEgMS4xLjMuMy4yLjQuNC40LjggMCAuMy0uMS41LS4zLjdzLS40LjMtLjguNGwuOCAxLjZoLTFsLS43LTEuNWgtLjIgMHptLjItLjdoLjJjLjMgMCAuNSAwIC42LS4xLjItLjEuMi0uMi4yLS40IDAtLjEtLjEtLjItLjItLjNzLS4zLS4xLS41LS4xaC0uMmwtLjEuOWgwem0tMTQuNi03LjVjLjUgMCAuOC4xIDEuMS4yLjIuMS40LjQuNC42IDAgLjMtLjEuNS0uMy43cy0uNC4zLS43LjNoMGEuNTUuNTUgMCAwIDEgLjUuM2MuMS4xLjIuMy4yLjUgMCAuNC0uMi43LS41LjlzLS44LjMtMS4zLjNoLTEuN2wxLTMuOWMtLjEuMSAxLjMuMSAxLjMuMXptLTEuMiAzLjJoLjZjLjIgMCAuNC0uMS42LS4yLjEtLjEuMi0uMi4yLS40IDAtLjMtLjItLjQtLjYtLjRoLS41bC0uMyAxem0uNC0xLjdoLjVjLjMgMCAuNCAwIC42LS4xLjEtLjEuMi0uMi4yLS40cy0uMi0uNC0uNS0uNGgtLjVjLS4xLjEtLjMuOS0uMy45em01LjEgMS41aC0xLjVsLS41LjloLTFsMi40LTMuOWgxLjJsLjUgMy45aC0uOWwtLjItLjloMHptMC0uN2wtLjEtLjl2LS43LS4xYy0uMS4yLS4yLjQtLjMuN2wtLjYgMWMtLjEgMCAxIDAgMSAwem01LjUgMS42aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjloMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjNoLjlsLTEgNGgwem00LjggMGgtMS4xbC0uNy0xLjYtLjQuMi0uMyAxLjRoLTFsMS0zLjloMWwtLjUgMS45LjUtLjUgMS4zLTEuM2gxLjFsLTEuOSAxLjkgMSAxLjloMHptLTE4LjktMy41YzAtLjItLjItLjQtLjQtLjRoLTguNWMtLjIgMC0uNC4yLS40LjRoMGMwIC4yLjIuNC40LjRoOC41Yy4yIDAgLjQtLjIuNC0uNGgwem0tMi4zIDEuNWMwLS4yLS4yLS40LS40LS40aC02LjJjLS4yIDAtLjQuMi0uNC40aDBjMCAuMi4yLjQuNC40aDYuMmMuMiAwIC40LS4yLjQtLjRoMHptLTIuNCAxLjZjMC0uMi0uMi0uNC0uNC0uNGgtMy45Yy0uMiAwLS40LjItLjQuNGgwYzAgLjIuMi40LjQuNGgzLjljLjMgMCAuNC0uMi40LS40aDB6IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Bank Transfer" width="80" height="30"> <span
                                        class="fundTypeImh">@lang('Bank Transfer')</span></span></td>
                            <td>@lang('From') $50</td>
                            <td>
                                @lang('Up to') $10,000
                            </td>
                            <td>@lang('No fees')<sup>2</sup></td>
                            <td>
                                @lang('Up to One Working Day')
                                <sup>3</sup>
                            </td>
                            <td>
                                EUR, USD, GBP, AUD, AED, Other
                            </td>
                            <td><a   class="btn bb2" data-bs-toggle="modal"
                                data-bs-target="#bankDeposit" >Fund</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwLjAwOCA3NzUuOTcyIiB4bWxuczp2PSJodHRwczovL3ZlY3RhLmlvL25hbm8iPjxwYXRoIGQ9Ik0xODEuOTc2IDc3NC4yNTV2LTUxLjUwMmMwLTE5Ljc0My0xMi4wMTgtMzIuNjE5LTMyLjYxOS0zMi42MTktMTAuMyAwLTIxLjQ1OSAzLjQzNC0yOS4xODQgMTQuNTkzLTYuMDA5LTkuNDQyLTE0LjU5My0xNC41OTMtMjcuNDY4LTE0LjU5My04LjU4NCAwLTE3LjE2OCAyLjU3NS0yNC4wMzUgMTIuMDE4di0xMC4zSDUwLjY0NHY4Mi40MDNINjguNjd2LTQ1LjQ5NGMwLTE0LjU5MiA3LjcyNS0yMS40NiAxOS43NDMtMjEuNDZzMTguMDI2IDcuNzI2IDE4LjAyNiAyMS40NnY0NS40OTRoMTguMDI2di00NS40OTRjMC0xNC41OTIgOC41ODMtMjEuNDYgMTkuNzQyLTIxLjQ2IDEyLjAxNyAwIDE4LjAyNiA3LjcyNiAxOC4wMjYgMjEuNDZ2NDUuNDk0aDE5Ljc0M3ptMjY2Ljk1NS04Mi40MDRoLTI5LjE4NXYtMjQuODkzSDQwMS43MnYyNC44OTNoLTE2LjMxdjE2LjMxaDE2LjMxdjM3Ljc2OGMwIDE4Ljg4NCA3LjcyNSAzMC4wNDMgMjguMzI2IDMwLjA0MyA3LjcyNiAwIDE2LjMxLTIuNTc1IDIyLjMxOC02LjAwOWwtNS4xNS0xNS40NWMtNS4xNSAzLjQzMy0xMS4xNTkgNC4yOTEtMTUuNDUgNC4yOTEtOC41ODUgMC0xMi4wMTgtNS4xNS0xMi4wMTgtMTMuNzM0di0zNi45MWgyOS4xODV2LTE2LjMwOXptMTUyLjc5LTEuNzE3Yy0xMC4zIDAtMTcuMTY3IDUuMTUtMjEuNDU5IDEyLjAxOHYtMTAuM2gtMTguMDI2djgyLjQwM2gxOC4wMjZ2LTQ2LjM1MmMwLTEzLjczNCA2LjAwOS0yMS40NiAxNy4xNjgtMjEuNDYgMy40MzMgMCA3LjcyNS44NTkgMTEuMTU5IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE3LS44NTl6bS0yMzAuOTAzIDguNTg0Yy04LjU4My02LjAwOS0yMC42LTguNTg0LTMzLjQ3Ni04LjU4NC0yMC42MDEgMC0zNC4zMzUgMTAuMy0zNC4zMzUgMjYuNjEgMCAxMy43MzQgMTAuMyAyMS40NiAyOC4zMjYgMjQuMDM1bDguNTg0Ljg1OGM5LjQ0MiAxLjcxNyAxNC41OTIgNC4yOTIgMTQuNTkyIDguNTg0IDAgNi4wMDgtNi44NjcgMTAuMy0xOC44ODQgMTAuM3MtMjEuNDYtNC4yOTItMjcuNDY4LTguNTg0bC04LjU4NCAxMy43MzRjOS40NDIgNi44NjcgMjIuMzE4IDEwLjMgMzUuMTk0IDEwLjMgMjQuMDM0IDAgMzcuNzY4LTExLjE1OCAzNy43NjgtMjYuNjA5IDAtMTQuNTkyLTExLjE1OS0yMi4zMTgtMjguMzI2LTI0Ljg5M2wtOC41ODQtLjg1OGMtNy43MjUtLjg1OC0xMy43MzQtMi41NzUtMTMuNzM0LTcuNzI1IDAtNi4wMDkgNi4wMDktOS40NDMgMTUuNDUtOS40NDMgMTAuMzAxIDAgMjAuNjAyIDQuMjkyIDI1Ljc1MiA2Ljg2N2w3LjcyNS0xNC41OTJ6bTQ3OC45NzQtOC41ODRjLTEwLjMgMC0xNy4xNjcgNS4xNS0yMS40NiAxMi4wMTh2LTEwLjNoLTE4LjAyNXY4Mi40MDNoMTguMDI2di00Ni4zNTJjMC0xMy43MzQgNi4wMDktMjEuNDYgMTcuMTY3LTIxLjQ2IDMuNDM0IDAgNy43MjYuODU5IDExLjE2IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE4LS44NTl6bS0yMzAuMDQ0IDQyLjkyYzAgMjQuODkyIDE3LjE2NyA0Mi45MTggNDMuNzc3IDQyLjkxOCAxMi4wMTcgMCAyMC42LTIuNTc1IDI5LjE4NS05LjQ0MmwtOC41ODQtMTQuNTkzYy02Ljg2NyA1LjE1LTEzLjczNCA3LjcyNi0yMS40NiA3LjcyNi0xNC41OTIgMC0yNC44OTMtMTAuMy0yNC44OTMtMjYuNjEgMC0xNS40NSAxMC4zMDEtMjUuNzUxIDI0Ljg5My0yNi42MSA3LjcyNiAwIDE0LjU5MyAyLjU3NiAyMS40NiA3LjcyNmw4LjU4NC0xNC41OTNjLTguNTg0LTYuODY3LTE3LjE2OC05LjQ0Mi0yOS4xODUtOS40NDItMjYuNjEgMC00My43NzcgMTguMDI2LTQzLjc3NyA0Mi45MnptMTY2LjUyNSAwVjY5MS44NWgtMTguMDI2djEwLjNjLTYuMDA5LTcuNzI1LTE0LjU5My0xMi4wMTctMjUuNzUyLTEyLjAxNy0yMy4xNzYgMC00MS4yMDIgMTguMDI2LTQxLjIwMiA0Mi45MnMxOC4wMjYgNDIuOTE4IDQxLjIwMiA0Mi45MThjMTIuMDE4IDAgMjAuNjAxLTQuMjkyIDI1Ljc1Mi0xMi4wMTd2MTAuM2gxOC4wMjZ2LTQxLjIwMnptLTY2LjA5NSAwYzAtMTQuNTkzIDkuNDQyLTI2LjYxIDI0Ljg5Mi0yNi42MSAxNC41OTMgMCAyNC44OTMgMTEuMTU4IDI0Ljg5MyAyNi42MSAwIDE0LjU5Mi0xMC4zIDI2LjYwOS0yNC44OTMgMjYuNjA5LTE1LjQ1LS44NTktMjQuODkyLTEyLjAxNy0yNC44OTItMjYuNjF6bS0yMTUuNDUzLTQyLjkyYy0yNC4wMzQgMC00MS4yMDIgMTcuMTY4LTQxLjIwMiA0Mi45MnMxNy4xNjggNDIuOTE4IDQyLjA2IDQyLjkxOGMxMi4wMTggMCAyNC4wMzUtMy40MzQgMzMuNDc3LTExLjE1OWwtOC41ODQtMTIuODc2Yy02Ljg2NyA1LjE1LTE1LjQ1IDguNTg0LTI0LjAzNCA4LjU4NC0xMS4xNTkgMC0yMi4zMTgtNS4xNS0yNC44OTMtMTkuNzQyaDYwLjk0NXYtNi44NjhjLjg1OC0yNi42MS0xNC41OTMtNDMuNzc3LTM3Ljc2OS00My43Nzd6bTAgMTUuNDUxYzExLjE1OSAwIDE4Ljg4NCA2Ljg2NyAyMC42MDEgMTkuNzQzaC00Mi45MTljMS43MTctMTEuMTYgOS40NDMtMTkuNzQzIDIyLjMxOC0xOS43NDN6bTQ0Ny4yMTQgMjcuNDY4di03My44MmgtMTguMDI2djQyLjkxOWMtNi4wMDgtNy43MjYtMTQuNTkyLTEyLjAxOC0yNS43NTEtMTIuMDE4LTIzLjE3NiAwLTQxLjIwMiAxOC4wMjYtNDEuMjAyIDQyLjkyczE4LjAyNiA0Mi45MTggNDEuMjAyIDQyLjkxOGMxMi4wMTcgMCAyMC42MDEtNC4yOTIgMjUuNzUxLTEyLjAxN3YxMC4zaDE4LjAyNnYtNDEuMjAyem0tNjYuMDk1IDBjMC0xNC41OTIgOS40NDItMjYuNjEgMjQuODkzLTI2LjYxIDE0LjU5MiAwIDI0Ljg5MyAxMS4xNiAyNC44OTMgMjYuNjEgMCAxNC41OTMtMTAuMyAyNi42MS0yNC44OTMgMjYuNjEtMTUuNDUtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXptLTYwMi41OCAwdi00MS4yMDJoLTE4LjAyNnYxMC4zYy02LjAwOC03LjcyNS0xNC41OTItMTIuMDE3LTI1Ljc1MS0xMi4wMTctMjMuMTc2IDAtNDEuMjAyIDE4LjAyNi00MS4yMDIgNDIuOTJzMTguMDI2IDQyLjkxOCA0MS4yMDIgNDIuOTE4YzEyLjAxNyAwIDIwLjYwMS00LjI5MiAyNS43NTEtMTIuMDE3djEwLjNoMTguMDI2di00MS4yMDJ6bS02Ni45NTMgMGMwLTE0LjU5MiA5LjQ0Mi0yNi42MSAyNC44OTMtMjYuNjEgMTQuNTkyIDAgMjQuODkzIDExLjE2IDI0Ljg5MyAyNi42MSAwIDE0LjU5My0xMC4zIDI2LjYxLTI0Ljg5MyAyNi42MS0xNS40NTEtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXoiLz48cGF0aCBmaWxsPSIjZmY1ZjAwIiBkPSJNMzY0LjgxIDY2LjA5NWgyNzAuMzg4djQ4NS44NEgzNjQuODF6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTM4MS45NzcgMzA5LjAxNWMwLTk4LjcxMyA0Ni4zNTMtMTg2LjI2NyAxMTcuNTk4LTI0Mi45MkM0NDcuMjE0IDI0Ljg5MyAzODEuMTE5IDAgMzA5LjAxNSAwIDEzOC4yIDAgMCAxMzguMTk4IDAgMzA5LjAxNXMxMzguMTk5IDMwOS4wMTYgMzA5LjAxNSAzMDkuMDE2YzcyLjEwNCAwIDEzOC4xOTktMjQuODkzIDE5MC41Ni02Ni4wOTUtNzEuMjQ1LTU1Ljc5NS0xMTcuNTk4LTE0NC4yMDctMTE3LjU5OC0yNDIuOTJ6Ii8+PHBhdGggZmlsbD0iI2Y3OWUxYiIgZD0iTTEwMDAuMDA4IDMwOS4wMTVjMCAxNzAuODE3LTEzOC4xOTggMzA5LjAxNi0zMDkuMDE1IDMwOS4wMTYtNzIuMTA0IDAtMTM4LjE5OS0yNC44OTMtMTkwLjU2LTY2LjA5NSA3Mi4xMDQtNTYuNjUzIDExNy41OTgtMTQ0LjIwNyAxMTcuNTk4LTI0Mi45MlM1NzEuNjc4IDEyMi43NDggNTAwLjQzMyA2Ni4wOTVDNTUyLjc5NCAyNC44OTMgNjE4Ljg5IDAgNjkwLjk5MyAwYzE3MC44MTcgMCAzMDkuMDE1IDEzOS4wNTcgMzA5LjAxNSAzMDkuMDE1eiIvPjwvc3ZnPg=="
                                        title="mastercard" width="35" height="30"> <span class="fundTypeImh">Visa
                                        &amp; MasterCard</span></span></td>
                            <td>$50</td>
                            <td>
                                $5,000
                            </td>
                            <td>No fees<sup>2</sup></td>
                            <td>Instant<sup>4</sup></td>
                            <td>
                                EUR, USD, GBP, AUD, AED, Other
                            </td>
                            <td><a   class="btn bb2 " data-bs-toggle="modal"
                                data-bs-target="#visaMaster" >Fund</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PGxpbmVhckdyYWRpZW50IGlkPSJBIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ii00NjAuNTc4IiB5MT0iMjgwLjUiIHgyPSItNDI2LjEyOCIgeTI9IjI4MC41Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM2YjE5NWYiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM0YzI1NWIiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Ik0tNDI4LjQgMjkxLjZoLTMwYTIuMjIgMi4yMiAwIDAgMS0yLjItMi4ydi0xNy44YTIuMjIgMi4yMiAwIDAgMSAyLjItMi4yaDMwYTIuMjIgMi4yMiAwIDAgMSAyLjIgMi4ydjE3LjhjLjEgMS4yLTEgMi4yLTIuMiAyLjJ6IiBmaWxsPSJ1cmwoI0EpIi8+PHBhdGggZD0iTS00MzYuNyAyNzcuOGMuNyAwIDEuMy0uNiAxLjMtMS4zcy0uNi0xLjMtMS4zLTEuMy0xLjMuNi0xLjMgMS4zYy4xLjcuNiAxLjMgMS4zIDEuM2gwem0tOS42LjdjLS4xLjEtLjUgMS4zLTEuNSAyLjV2LTUuMWwtMi42LjV2OS4zaDIuNnYtMi45Yy44IDEuMSAxLjEgMi45IDEuMSAyLjloMy4xYy0uMy0xLjMtMS43LTMuNy0xLjctMy43IDEuMi0xLjYgMS44LTMuMiAxLjgtMy41aC0yLjggMHptNi45LS4xYy0yLjQuMS0zLjUgMS4xLTMuNSAzLjJ2NGgyLjZ2LTMuM2MwLTEuMy4yLTEuOCAxLjctMS44di0yLjFjLS40LS4xLS44IDAtLjggMGgwem0tMTUuNCAxLjFjLS4zIDAtMS4xLS4xLTEuMS0uNyAwLS44IDEuMS0uOCAxLjUtLjguNyAwIDEuNi4yIDIuMy40IDAgMCAuNC4xLjcuM2gwdi0yLjJoMGMtLjgtLjMtMS43LS41LTMuMy0uNS0yLjkgMC0zLjkgMS43LTMuOSAzLjEgMCAuOC40IDIuOCAzLjYgMyAuMyAwIDEgLjEgMSAuOCAwIC42LS42LjktMS42LjktMS4xIDAtMi4yLS4zLTIuOS0uNnYyLjNjMSAuMyAyLjEuNCAzLjQuNCAyLjggMCA0LjEtMS42IDQuMS0zLjIgMC0xLjktMS40LTMuMS0zLjgtMy4yaDB6bTE2LjkgNi4xaDIuNXYtNy4xaC0yLjV2Ny4xem03LjMtOS4zdjkuM2gyLjV2LTkuOGwtMi41LjVoMHptLTMuNyAwbDIuNS0uNXY5LjhoLTIuNXYtOS4zaDB6IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Skrill" width="80" height="30"> <span
                                        class="fundTypeImh">Skrill</span></span></td>
                            <td>$50</td>
                            <td>€50,000 or equivalent</td>
                            <td>No fees<sup>2</sup></td>
                            <td>Instant</td>
                            <td>EUR, USD, GBP, AUD, AED, Other</td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">Fund</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTS00MjguNCAyOTEuNmgtMzBhMi4yMiAyLjIyIDAgMCAxLTIuMi0yLjJ2LTE3LjhhMi4yMiAyLjIyIDAgMCAxIDIuMi0yLjJoMzBhMi4yMiAyLjIyIDAgMCAxIDIuMiAyLjJ2MTcuOGMuMSAxLjItLjkgMi4yLTIuMiAyLjJ6IiBmaWxsPSIjODNiYTNiIi8+PHBhdGggZD0iTS00MjguNCAyNzguOWMtLjQtLjItMS0uNC0xLjgtLjRoLTIuMWwtLjggMy42aC0yLjdsLjItLjhoMS42bC4yLS45aC0xLjZsLjItLjhoMS43bC4yLTEuMWgtMy40bC0uNyAzLjRoLTEuM2wuNy0zLjRoLTEuOGwtLjcgMy40aC0xLjJsLjctMy40aC0xLjhsLS44IDMuNmgtMi43bC4yLS44aDEuNmwuMi0uOWgtMS42bC4yLS44aDEuN2wuMi0xLjFoLTEwLjZsLS42IDIuOS0xLjItMi45aC0xLjlsLTEgNC43aDEuOGwuNi0zIDEuMiAzaDYuM2wuOC0zLjZoMWwtLjggMy42aDE2LjdsLjUtMi4zLjggMi4zaDEuOGwtLjgtMS45aC4yYy40LS4xLjctLjIuOS0uNS4yLS4yLjMtLjYuMy0uOWExIDEgMCAwIDAtLjYtMWgwem0tMjIuMyAzLjNoLTIuN2wuMi0uOGgxLjdsLjItLjloLTEuN2wuMi0uOGgyLjdsLS42IDIuNWgwem0yMC45LTEuNmMtLjIuMS0uNC4yLS44LjJoLS4zbC4zLTEuM2guM2MuMyAwIC41IDAgLjcuMS4xLjEuMy4yLjMuNC0uMi4zLS40LjUtLjUuNmgweiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=="
                                        title="neteller" width="80" height="30"> <span
                                        class="fundTypeImh">Neteller</span></span></td>
                            <td>$50</td>
                            <td>€50,000 or equivalent</td>
                            <td>No fees<sup>2</sup></td>
                            <td>Instant</td>
                            <td>EUR, USD, GBP, AUD, AED, Other</td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">Fund</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTTE5NzAsMTI0MmMtMTMzLjQ4LDUzNS42Ni02NzYuMTgsODYxLjY4LTEyMTIsNzI4Uy0xMDMuNjksMTI5My44OSwzMCw3NTguMTgsNzA2LjEyLTEwMy43LDEyNDEuODIsMzAsMjEwMy42OSw3MDYuMTYsMTk3MCwxMjQyaDBaIiBmaWxsPSIjZjc5MzFhIi8+PHBhdGggZD0iTTE0NDEgODU3LjUzYzE5Ljg4LTEzMy4wNy04MS40NC0yMDQuNjEtMjIwLTI1Mi4zM2w0NS0xODAuMjUtMTA5Ljc2LTI3LjM0LTQzLjg0IDE3NS41MS04Ny44OC0yMC42OCA0NC0xNzYuNjctMTA5LjY1LTI3LjM0TDkxNCA1MjguNjFsLTIyMS4zMi01NC44Mkw2NjMuNDggNTkxczgxLjQyIDE4LjY2IDc5LjcgMTkuODJjNDQuNDQgMTEuMSA1Mi41IDQwLjUgNTEuMTQgNjMuODJsLTEyMy4xNCA0OTMuOGMtNS40NCAxMy41LTE5LjIyIDMzLjc0LTUwLjI4IDI2IDEuMSAxLjYtNzkuNzYtMjAtNzkuNzYtMjBsLTU0LjQ4IDEyNS43OSAyMjEgNTUuOC00NS40MiAxODIuMzUgMTA5LjYgMjcuMzQgNDUtMTgwLjM5IDg3LjQyIDIyLjY4LTQ0LjgyIDE3OS41NSAxMDkuNzQgMjcuMzQgNDUuNDItMTgyYzE4Ny4xMyAzNS40IDMyNy44NSAyMS4xMiAzODctMTQ4IDQ3LjcyLTEzNi4yNS0yLjM0LTIxNC44NS0xMDAuOC0yNjYuMTMgNzEuNy0xNi42IDEyNS43LTYzLjc0IDE0MC4xMS0xNjEuMTdtLTI1MC43MSAzNTEuNTJjLTM0IDEzNi4yNS0yNjMuMzUgNjIuNjItMzM3Ljc3IDQ0LjEybDYwLjI2LTI0MS41NWM3NC4zOCAxOC41NiAzMTIuODkgNTUuMzIgMjc3LjU1IDE5Ny40MW0zNC0zNTMuNWMtMzAuOTQgMTI0LTIyMS45MSA2MS0yODMuODkgNDUuNTRMOTk0LjkxIDY4MmM2MiAxNS40OCAyNjEuNTEgNDQuMyAyMjkuMjUgMTczLjU5IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Bitcoin Transfer" width="80" height="30"> <span
                                        class="fundTypeImh">Crypto</span></span></td>
                            <td>From $50</td>
                            <td>Unlimited</td>
                            <td>No fees<sup>2</sup></td>
                            <td>Instant<sup>5</sup></td>
                            <td>
                                BTC, USDT, ETH, USDC<sup>7</sup></td>
                            <td><a class="OpenFirstModel btn bb2"  data-bs-toggle="modal"
                                    data-bs-target="#exampleModalToggle">Fund</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="{{ asset('images/new_images/svg/sticpay_bank2.svg') }}"
                                        title="Bitcoin Transfer" width="80" height="30"> <span
                                        class="fundTypeImh">Sticpay</span></span></td>
                            <td>From $50</td>
                            <td>Unlimited</td>
                            <td>No fees<sup>2</sup></td>
                            <td>Instant<sup>5</sup></td>
                            <td>Crypto, EUR, USD, GBP, AUD, AED, Other</td>
                            <td><a class="OpenFirstModel btn bb2"  data-bs-toggle="modal"
                                    data-bs-target="#sticpayToggle">Fund</a></td>
                        </tr>
                    </tbody>
                </table>



                <table id="hide02" cellpadding="0" cellspacing="0"
                    class="whiteBG table fundingMethodstable table-bordered table-striped spaceWrap hide table_toggle">
                    <thead>
                        <tr>
                            <th>@lang('Withdrawal Options')</th>
                            <th>@lang('Min Withdrawal') </th>
                            <th>@lang('Max Withdrawal') </th>
                            <th>@lang('Fees') </th>
                            <th>@lang('Processing Time') </th>
                            <th>@lang('Accepted Currencies') </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tbody2">
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTS00MjguNCAyOTEuNmgtMzBhMi4yMiAyLjIyIDAgMCAxLTIuMi0yLjJ2LTE3LjhhMi4yMiAyLjIyIDAgMCAxIDIuMi0yLjJoMzBhMi4yMiAyLjIyIDAgMCAxIDIuMiAyLjJ2MTcuOGMuMSAxLjItMSAyLjItMi4yIDIuMnoiIGZpbGw9IiMzMjM3M2MiLz48cGF0aCBkPSJNLTQ1Ny42IDI4NS45aC0xbC44LTMuMWgtMS4xbC4yLS43aDMuMmwtLjIuN2gtMS4xYzAgMC0uOCAzLjEtLjggMy4xem0zLjMtMS40bC0uNCAxLjVoLTFsMS0zLjhoMS4xYy41IDAgLjkuMSAxLjEuMy4zLjIuNC40LjQuOCAwIC4zLS4xLjUtLjMuN3MtLjQuMy0uOC40bC44IDEuNmgtMWwtLjctMS41aC0uMiAwem0uMS0uN2guMmMuMyAwIC41IDAgLjYtLjFzLjItLjIuMi0uNGMwLS4xLS4xLS4yLS4yLS4zcy0uMy0uMS0uNS0uMWgtLjJsLS4xLjloMHptNS4xIDEuMmgtMS41bC0uNS45aC0xbDIuNC0zLjhoMS4ybC41IDMuOGgtLjljLS4xIDAtLjItLjktLjItLjl6bTAtLjZsLS4xLS45di0uNy0uMWMtLjEuMi0uMi40LS4zLjdsLS42IDFoMSAwem01LjUgMS41aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjhoMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjJoLjlsLTEgMy44aDB6bTQuMS0xLjFjMCAuNC0uMi42LS41LjktLjMuMi0uNy4zLTEuMy4zLS41IDAtLjgtLjEtMS4xLS4ydi0uN2MuNC4yLjguMyAxLjEuMy4yIDAgLjQgMCAuNi0uMS4xLS4xLjItLjIuMi0uM3YtLjJjMC0uMS0uMS0uMS0uMS0uMi0uMSAwLS4yLS4xLS40LS4zLS4zLS4yLS41LS4zLS42LS41cy0uMi0uMy0uMi0uNS4xLS40LjItLjYuMy0uMy42LS40Yy4yLS4xLjUtLjEuOC0uMS41IDAgLjkuMSAxLjMuM2wtLjMuNmMtLjMtLjEtLjYtLjItLjktLjItLjIgMC0uMyAwLS40LjFzLS4yLjItLjIuMyAwIC4yLjEuMy4yLjIuNS4zLjQuMy42LjVjMCAwIDAgLjIgMCAuNGgwem0xLjggMS4xaC0xbDEtMy44aDIuNmwtLjIuN2gtMS42bC0uMyAxaDEuNWwtLjIuN2gtMS41bC0uMyAxLjRoMHptNS4yIDBoLTIuNmwxLTMuOGgyLjZsLS4yLjdoLTEuNmwtLjIuOGgxLjVsLS4yLjdoLTEuNWwtLjMgMWgxLjZsLS4xLjZoMHptMi40LTEuNGwtLjQgMS41aC0xbDEtMy44aDEuMWMuNSAwIC45LjEgMS4xLjMuMy4yLjQuNC40LjggMCAuMy0uMS41LS4zLjdzLS40LjMtLjguNGwuOCAxLjZoLTFsLS43LTEuNWgtLjIgMHptLjItLjdoLjJjLjMgMCAuNSAwIC42LS4xLjItLjEuMi0uMi4yLS40IDAtLjEtLjEtLjItLjItLjNzLS4zLS4xLS41LS4xaC0uMmwtLjEuOWgwem0tMTQuNi03LjVjLjUgMCAuOC4xIDEuMS4yLjIuMS40LjQuNC42IDAgLjMtLjEuNS0uMy43cy0uNC4zLS43LjNoMGEuNTUuNTUgMCAwIDEgLjUuM2MuMS4xLjIuMy4yLjUgMCAuNC0uMi43LS41LjlzLS44LjMtMS4zLjNoLTEuN2wxLTMuOWMtLjEuMSAxLjMuMSAxLjMuMXptLTEuMiAzLjJoLjZjLjIgMCAuNC0uMS42LS4yLjEtLjEuMi0uMi4yLS40IDAtLjMtLjItLjQtLjYtLjRoLS41bC0uMyAxem0uNC0xLjdoLjVjLjMgMCAuNCAwIC42LS4xLjEtLjEuMi0uMi4yLS40cy0uMi0uNC0uNS0uNGgtLjVjLS4xLjEtLjMuOS0uMy45em01LjEgMS41aC0xLjVsLS41LjloLTFsMi40LTMuOWgxLjJsLjUgMy45aC0uOWwtLjItLjloMHptMC0uN2wtLjEtLjl2LS43LS4xYy0uMS4yLS4yLjQtLjMuN2wtLjYgMWMtLjEgMCAxIDAgMSAwem01LjUgMS42aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjloMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjNoLjlsLTEgNGgwem00LjggMGgtMS4xbC0uNy0xLjYtLjQuMi0uMyAxLjRoLTFsMS0zLjloMWwtLjUgMS45LjUtLjUgMS4zLTEuM2gxLjFsLTEuOSAxLjkgMSAxLjloMHptLTE4LjktMy41YzAtLjItLjItLjQtLjQtLjRoLTguNWMtLjIgMC0uNC4yLS40LjRoMGMwIC4yLjIuNC40LjRoOC41Yy4yIDAgLjQtLjIuNC0uNGgwem0tMi4zIDEuNWMwLS4yLS4yLS40LS40LS40aC02LjJjLS4yIDAtLjQuMi0uNC40aDBjMCAuMi4yLjQuNC40aDYuMmMuMiAwIC40LS4yLjQtLjRoMHptLTIuNCAxLjZjMC0uMi0uMi0uNC0uNC0uNGgtMy45Yy0uMiAwLS40LjItLjQuNGgwYzAgLjIuMi40LjQuNGgzLjljLjMgMCAuNC0uMi40LS40aDB6IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Skrill" width="80" height="30"> <span class="fundTypeImh">Bank
                                        Transfer
                                    </span></span></td>
                            <td>From $15<sup>(1)</sup><sup>(6)</sup></td>
                            <td>Unlimited</td>
                            <td>No fees<sup>2</sup></td>
                            <td>1 Working Day</td>
                            <td>
                                EUR, USD, GBP, AUD, ZAR, VND, IDR, THB
                            </td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">WITHDRAW</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwLjAwOCA3NzUuOTcyIiB4bWxuczp2PSJodHRwczovL3ZlY3RhLmlvL25hbm8iPjxwYXRoIGQ9Ik0xODEuOTc2IDc3NC4yNTV2LTUxLjUwMmMwLTE5Ljc0My0xMi4wMTgtMzIuNjE5LTMyLjYxOS0zMi42MTktMTAuMyAwLTIxLjQ1OSAzLjQzNC0yOS4xODQgMTQuNTkzLTYuMDA5LTkuNDQyLTE0LjU5My0xNC41OTMtMjcuNDY4LTE0LjU5My04LjU4NCAwLTE3LjE2OCAyLjU3NS0yNC4wMzUgMTIuMDE4di0xMC4zSDUwLjY0NHY4Mi40MDNINjguNjd2LTQ1LjQ5NGMwLTE0LjU5MiA3LjcyNS0yMS40NiAxOS43NDMtMjEuNDZzMTguMDI2IDcuNzI2IDE4LjAyNiAyMS40NnY0NS40OTRoMTguMDI2di00NS40OTRjMC0xNC41OTIgOC41ODMtMjEuNDYgMTkuNzQyLTIxLjQ2IDEyLjAxNyAwIDE4LjAyNiA3LjcyNiAxOC4wMjYgMjEuNDZ2NDUuNDk0aDE5Ljc0M3ptMjY2Ljk1NS04Mi40MDRoLTI5LjE4NXYtMjQuODkzSDQwMS43MnYyNC44OTNoLTE2LjMxdjE2LjMxaDE2LjMxdjM3Ljc2OGMwIDE4Ljg4NCA3LjcyNSAzMC4wNDMgMjguMzI2IDMwLjA0MyA3LjcyNiAwIDE2LjMxLTIuNTc1IDIyLjMxOC02LjAwOWwtNS4xNS0xNS40NWMtNS4xNSAzLjQzMy0xMS4xNTkgNC4yOTEtMTUuNDUgNC4yOTEtOC41ODUgMC0xMi4wMTgtNS4xNS0xMi4wMTgtMTMuNzM0di0zNi45MWgyOS4xODV2LTE2LjMwOXptMTUyLjc5LTEuNzE3Yy0xMC4zIDAtMTcuMTY3IDUuMTUtMjEuNDU5IDEyLjAxOHYtMTAuM2gtMTguMDI2djgyLjQwM2gxOC4wMjZ2LTQ2LjM1MmMwLTEzLjczNCA2LjAwOS0yMS40NiAxNy4xNjgtMjEuNDYgMy40MzMgMCA3LjcyNS44NTkgMTEuMTU5IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE3LS44NTl6bS0yMzAuOTAzIDguNTg0Yy04LjU4My02LjAwOS0yMC42LTguNTg0LTMzLjQ3Ni04LjU4NC0yMC42MDEgMC0zNC4zMzUgMTAuMy0zNC4zMzUgMjYuNjEgMCAxMy43MzQgMTAuMyAyMS40NiAyOC4zMjYgMjQuMDM1bDguNTg0Ljg1OGM5LjQ0MiAxLjcxNyAxNC41OTIgNC4yOTIgMTQuNTkyIDguNTg0IDAgNi4wMDgtNi44NjcgMTAuMy0xOC44ODQgMTAuM3MtMjEuNDYtNC4yOTItMjcuNDY4LTguNTg0bC04LjU4NCAxMy43MzRjOS40NDIgNi44NjcgMjIuMzE4IDEwLjMgMzUuMTk0IDEwLjMgMjQuMDM0IDAgMzcuNzY4LTExLjE1OCAzNy43NjgtMjYuNjA5IDAtMTQuNTkyLTExLjE1OS0yMi4zMTgtMjguMzI2LTI0Ljg5M2wtOC41ODQtLjg1OGMtNy43MjUtLjg1OC0xMy43MzQtMi41NzUtMTMuNzM0LTcuNzI1IDAtNi4wMDkgNi4wMDktOS40NDMgMTUuNDUtOS40NDMgMTAuMzAxIDAgMjAuNjAyIDQuMjkyIDI1Ljc1MiA2Ljg2N2w3LjcyNS0xNC41OTJ6bTQ3OC45NzQtOC41ODRjLTEwLjMgMC0xNy4xNjcgNS4xNS0yMS40NiAxMi4wMTh2LTEwLjNoLTE4LjAyNXY4Mi40MDNoMTguMDI2di00Ni4zNTJjMC0xMy43MzQgNi4wMDktMjEuNDYgMTcuMTY3LTIxLjQ2IDMuNDM0IDAgNy43MjYuODU5IDExLjE2IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE4LS44NTl6bS0yMzAuMDQ0IDQyLjkyYzAgMjQuODkyIDE3LjE2NyA0Mi45MTggNDMuNzc3IDQyLjkxOCAxMi4wMTcgMCAyMC42LTIuNTc1IDI5LjE4NS05LjQ0MmwtOC41ODQtMTQuNTkzYy02Ljg2NyA1LjE1LTEzLjczNCA3LjcyNi0yMS40NiA3LjcyNi0xNC41OTIgMC0yNC44OTMtMTAuMy0yNC44OTMtMjYuNjEgMC0xNS40NSAxMC4zMDEtMjUuNzUxIDI0Ljg5My0yNi42MSA3LjcyNiAwIDE0LjU5MyAyLjU3NiAyMS40NiA3LjcyNmw4LjU4NC0xNC41OTNjLTguNTg0LTYuODY3LTE3LjE2OC05LjQ0Mi0yOS4xODUtOS40NDItMjYuNjEgMC00My43NzcgMTguMDI2LTQzLjc3NyA0Mi45MnptMTY2LjUyNSAwVjY5MS44NWgtMTguMDI2djEwLjNjLTYuMDA5LTcuNzI1LTE0LjU5My0xMi4wMTctMjUuNzUyLTEyLjAxNy0yMy4xNzYgMC00MS4yMDIgMTguMDI2LTQxLjIwMiA0Mi45MnMxOC4wMjYgNDIuOTE4IDQxLjIwMiA0Mi45MThjMTIuMDE4IDAgMjAuNjAxLTQuMjkyIDI1Ljc1Mi0xMi4wMTd2MTAuM2gxOC4wMjZ2LTQxLjIwMnptLTY2LjA5NSAwYzAtMTQuNTkzIDkuNDQyLTI2LjYxIDI0Ljg5Mi0yNi42MSAxNC41OTMgMCAyNC44OTMgMTEuMTU4IDI0Ljg5MyAyNi42MSAwIDE0LjU5Mi0xMC4zIDI2LjYwOS0yNC44OTMgMjYuNjA5LTE1LjQ1LS44NTktMjQuODkyLTEyLjAxNy0yNC44OTItMjYuNjF6bS0yMTUuNDUzLTQyLjkyYy0yNC4wMzQgMC00MS4yMDIgMTcuMTY4LTQxLjIwMiA0Mi45MnMxNy4xNjggNDIuOTE4IDQyLjA2IDQyLjkxOGMxMi4wMTggMCAyNC4wMzUtMy40MzQgMzMuNDc3LTExLjE1OWwtOC41ODQtMTIuODc2Yy02Ljg2NyA1LjE1LTE1LjQ1IDguNTg0LTI0LjAzNCA4LjU4NC0xMS4xNTkgMC0yMi4zMTgtNS4xNS0yNC44OTMtMTkuNzQyaDYwLjk0NXYtNi44NjhjLjg1OC0yNi42MS0xNC41OTMtNDMuNzc3LTM3Ljc2OS00My43Nzd6bTAgMTUuNDUxYzExLjE1OSAwIDE4Ljg4NCA2Ljg2NyAyMC42MDEgMTkuNzQzaC00Mi45MTljMS43MTctMTEuMTYgOS40NDMtMTkuNzQzIDIyLjMxOC0xOS43NDN6bTQ0Ny4yMTQgMjcuNDY4di03My44MmgtMTguMDI2djQyLjkxOWMtNi4wMDgtNy43MjYtMTQuNTkyLTEyLjAxOC0yNS43NTEtMTIuMDE4LTIzLjE3NiAwLTQxLjIwMiAxOC4wMjYtNDEuMjAyIDQyLjkyczE4LjAyNiA0Mi45MTggNDEuMjAyIDQyLjkxOGMxMi4wMTcgMCAyMC42MDEtNC4yOTIgMjUuNzUxLTEyLjAxN3YxMC4zaDE4LjAyNnYtNDEuMjAyem0tNjYuMDk1IDBjMC0xNC41OTIgOS40NDItMjYuNjEgMjQuODkzLTI2LjYxIDE0LjU5MiAwIDI0Ljg5MyAxMS4xNiAyNC44OTMgMjYuNjEgMCAxNC41OTMtMTAuMyAyNi42MS0yNC44OTMgMjYuNjEtMTUuNDUtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXptLTYwMi41OCAwdi00MS4yMDJoLTE4LjAyNnYxMC4zYy02LjAwOC03LjcyNS0xNC41OTItMTIuMDE3LTI1Ljc1MS0xMi4wMTctMjMuMTc2IDAtNDEuMjAyIDE4LjAyNi00MS4yMDIgNDIuOTJzMTguMDI2IDQyLjkxOCA0MS4yMDIgNDIuOTE4YzEyLjAxNyAwIDIwLjYwMS00LjI5MiAyNS43NTEtMTIuMDE3djEwLjNoMTguMDI2di00MS4yMDJ6bS02Ni45NTMgMGMwLTE0LjU5MiA5LjQ0Mi0yNi42MSAyNC44OTMtMjYuNjEgMTQuNTkyIDAgMjQuODkzIDExLjE2IDI0Ljg5MyAyNi42MSAwIDE0LjU5My0xMC4zIDI2LjYxLTI0Ljg5MyAyNi42MS0xNS40NTEtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXoiLz48cGF0aCBmaWxsPSIjZmY1ZjAwIiBkPSJNMzY0LjgxIDY2LjA5NWgyNzAuMzg4djQ4NS44NEgzNjQuODF6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTM4MS45NzcgMzA5LjAxNWMwLTk4LjcxMyA0Ni4zNTMtMTg2LjI2NyAxMTcuNTk4LTI0Mi45MkM0NDcuMjE0IDI0Ljg5MyAzODEuMTE5IDAgMzA5LjAxNSAwIDEzOC4yIDAgMCAxMzguMTk4IDAgMzA5LjAxNXMxMzguMTk5IDMwOS4wMTYgMzA5LjAxNSAzMDkuMDE2YzcyLjEwNCAwIDEzOC4xOTktMjQuODkzIDE5MC41Ni02Ni4wOTUtNzEuMjQ1LTU1Ljc5NS0xMTcuNTk4LTE0NC4yMDctMTE3LjU5OC0yNDIuOTJ6Ii8+PHBhdGggZmlsbD0iI2Y3OWUxYiIgZD0iTTEwMDAuMDA4IDMwOS4wMTVjMCAxNzAuODE3LTEzOC4xOTggMzA5LjAxNi0zMDkuMDE1IDMwOS4wMTYtNzIuMTA0IDAtMTM4LjE5OS0yNC44OTMtMTkwLjU2LTY2LjA5NSA3Mi4xMDQtNTYuNjUzIDExNy41OTgtMTQ0LjIwNyAxMTcuNTk4LTI0Mi45MlM1NzEuNjc4IDEyMi43NDggNTAwLjQzMyA2Ni4wOTVDNTUyLjc5NCAyNC44OTMgNjE4Ljg5IDAgNjkwLjk5MyAwYzE3MC44MTcgMCAzMDkuMDE1IDEzOS4wNTcgMzA5LjAxNSAzMDkuMDE1eiIvPjwvc3ZnPg=="
                                        title="mastercard" width="35" height="30"> <span class="fundTypeImh">Visa
                                        &amp; MasterCard</span></span></td>
                            <td>$50<sup>6</sup></td>
                            <td>$5,000</td>
                            <td>No fees<sup>2</sup></td>
                            <td>1 Working Day</td>
                            <td>EUR, USD, GBP, AUD, ZAR</td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">WITHDRAW</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PGxpbmVhckdyYWRpZW50IGlkPSJBIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ii00NjAuNTc4IiB5MT0iMjgwLjUiIHgyPSItNDI2LjEyOCIgeTI9IjI4MC41Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM2YjE5NWYiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM0YzI1NWIiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Ik0tNDI4LjQgMjkxLjZoLTMwYTIuMjIgMi4yMiAwIDAgMS0yLjItMi4ydi0xNy44YTIuMjIgMi4yMiAwIDAgMSAyLjItMi4yaDMwYTIuMjIgMi4yMiAwIDAgMSAyLjIgMi4ydjE3LjhjLjEgMS4yLTEgMi4yLTIuMiAyLjJ6IiBmaWxsPSJ1cmwoI0EpIi8+PHBhdGggZD0iTS00MzYuNyAyNzcuOGMuNyAwIDEuMy0uNiAxLjMtMS4zcy0uNi0xLjMtMS4zLTEuMy0xLjMuNi0xLjMgMS4zYy4xLjcuNiAxLjMgMS4zIDEuM2gwem0tOS42LjdjLS4xLjEtLjUgMS4zLTEuNSAyLjV2LTUuMWwtMi42LjV2OS4zaDIuNnYtMi45Yy44IDEuMSAxLjEgMi45IDEuMSAyLjloMy4xYy0uMy0xLjMtMS43LTMuNy0xLjctMy43IDEuMi0xLjYgMS44LTMuMiAxLjgtMy41aC0yLjggMHptNi45LS4xYy0yLjQuMS0zLjUgMS4xLTMuNSAzLjJ2NGgyLjZ2LTMuM2MwLTEuMy4yLTEuOCAxLjctMS44di0yLjFjLS40LS4xLS44IDAtLjggMGgwem0tMTUuNCAxLjFjLS4zIDAtMS4xLS4xLTEuMS0uNyAwLS44IDEuMS0uOCAxLjUtLjguNyAwIDEuNi4yIDIuMy40IDAgMCAuNC4xLjcuM2gwdi0yLjJoMGMtLjgtLjMtMS43LS41LTMuMy0uNS0yLjkgMC0zLjkgMS43LTMuOSAzLjEgMCAuOC40IDIuOCAzLjYgMyAuMyAwIDEgLjEgMSAuOCAwIC42LS42LjktMS42LjktMS4xIDAtMi4yLS4zLTIuOS0uNnYyLjNjMSAuMyAyLjEuNCAzLjQuNCAyLjggMCA0LjEtMS42IDQuMS0zLjIgMC0xLjktMS40LTMuMS0zLjgtMy4yaDB6bTE2LjkgNi4xaDIuNXYtNy4xaC0yLjV2Ny4xem03LjMtOS4zdjkuM2gyLjV2LTkuOGwtMi41LjVoMHptLTMuNyAwbDIuNS0uNXY5LjhoLTIuNXYtOS4zaDB6IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Skrill" width="80" height="30"> <span class="fundTypeImh">Skrill
                                    </span></span></td>
                            <td>£5/€5/$5</td>
                            <td>$50,000 or equivalent</td>
                            <td>No fees<sup>2</sup></td>
                            <td>1 Working Day</td>
                            <td>EUR, USD, GBP, AUD, ZAR</td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">WITHDRAW</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTS00MjguNCAyOTEuNmgtMzBhMi4yMiAyLjIyIDAgMCAxLTIuMi0yLjJ2LTE3LjhhMi4yMiAyLjIyIDAgMCAxIDIuMi0yLjJoMzBhMi4yMiAyLjIyIDAgMCAxIDIuMiAyLjJ2MTcuOGMuMSAxLjItLjkgMi4yLTIuMiAyLjJ6IiBmaWxsPSIjODNiYTNiIi8+PHBhdGggZD0iTS00MjguNCAyNzguOWMtLjQtLjItMS0uNC0xLjgtLjRoLTIuMWwtLjggMy42aC0yLjdsLjItLjhoMS42bC4yLS45aC0xLjZsLjItLjhoMS43bC4yLTEuMWgtMy40bC0uNyAzLjRoLTEuM2wuNy0zLjRoLTEuOGwtLjcgMy40aC0xLjJsLjctMy40aC0xLjhsLS44IDMuNmgtMi43bC4yLS44aDEuNmwuMi0uOWgtMS42bC4yLS44aDEuN2wuMi0xLjFoLTEwLjZsLS42IDIuOS0xLjItMi45aC0xLjlsLTEgNC43aDEuOGwuNi0zIDEuMiAzaDYuM2wuOC0zLjZoMWwtLjggMy42aDE2LjdsLjUtMi4zLjggMi4zaDEuOGwtLjgtMS45aC4yYy40LS4xLjctLjIuOS0uNS4yLS4yLjMtLjYuMy0uOWExIDEgMCAwIDAtLjYtMWgwem0tMjIuMyAzLjNoLTIuN2wuMi0uOGgxLjdsLjItLjloLTEuN2wuMi0uOGgyLjdsLS42IDIuNWgwem0yMC45LTEuNmMtLjIuMS0uNC4yLS44LjJoLS4zbC4zLTEuM2guM2MuMyAwIC41IDAgLjcuMS4xLjEuMy4yLjMuNC0uMi4zLS40LjUtLjUuNmgweiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=="
                                        title="Skrill" width="80" height="30"> <span class="fundTypeImh">Neteller
                                    </span></span></td>
                            <td>£5/€5/$5</td>
                            <td>€50,000 or equivalent</td>
                            <td>No fees<sup>2</sup></td>
                            <td>1 Working Day</td>
                            <td>EUR, USD, GBP, AUD, ZAR</td>
                            <td><a   class="btn bb2" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="{{ __('This payment method is not available in your country.') }}">WITHDRAW</a></td>
                        </tr>
                        <tr>
                            <td><span class="fundTypeImh d-flex"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTTE5NzAsMTI0MmMtMTMzLjQ4LDUzNS42Ni02NzYuMTgsODYxLjY4LTEyMTIsNzI4Uy0xMDMuNjksMTI5My44OSwzMCw3NTguMTgsNzA2LjEyLTEwMy43LDEyNDEuODIsMzAsMjEwMy42OSw3MDYuMTYsMTk3MCwxMjQyaDBaIiBmaWxsPSIjZjc5MzFhIi8+PHBhdGggZD0iTTE0NDEgODU3LjUzYzE5Ljg4LTEzMy4wNy04MS40NC0yMDQuNjEtMjIwLTI1Mi4zM2w0NS0xODAuMjUtMTA5Ljc2LTI3LjM0LTQzLjg0IDE3NS41MS04Ny44OC0yMC42OCA0NC0xNzYuNjctMTA5LjY1LTI3LjM0TDkxNCA1MjguNjFsLTIyMS4zMi01NC44Mkw2NjMuNDggNTkxczgxLjQyIDE4LjY2IDc5LjcgMTkuODJjNDQuNDQgMTEuMSA1Mi41IDQwLjUgNTEuMTQgNjMuODJsLTEyMy4xNCA0OTMuOGMtNS40NCAxMy41LTE5LjIyIDMzLjc0LTUwLjI4IDI2IDEuMSAxLjYtNzkuNzYtMjAtNzkuNzYtMjBsLTU0LjQ4IDEyNS43OSAyMjEgNTUuOC00NS40MiAxODIuMzUgMTA5LjYgMjcuMzQgNDUtMTgwLjM5IDg3LjQyIDIyLjY4LTQ0LjgyIDE3OS41NSAxMDkuNzQgMjcuMzQgNDUuNDItMTgyYzE4Ny4xMyAzNS40IDMyNy44NSAyMS4xMiAzODctMTQ4IDQ3LjcyLTEzNi4yNS0yLjM0LTIxNC44NS0xMDAuOC0yNjYuMTMgNzEuNy0xNi42IDEyNS43LTYzLjc0IDE0MC4xMS0xNjEuMTdtLTI1MC43MSAzNTEuNTJjLTM0IDEzNi4yNS0yNjMuMzUgNjIuNjItMzM3Ljc3IDQ0LjEybDYwLjI2LTI0MS41NWM3NC4zOCAxOC41NiAzMTIuODkgNTUuMzIgMjc3LjU1IDE5Ny40MW0zNC0zNTMuNWMtMzAuOTQgMTI0LTIyMS45MSA2MS0yODMuODkgNDUuNTRMOTk0LjkxIDY4MmM2MiAxNS40OCAyNjEuNTEgNDQuMyAyMjkuMjUgMTczLjU5IiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        title="Bitcoin Transfer" width="80" height="30"> <span
                                        class="fundTypeImh">Crypto</span></span></td>
                            <td>$5</td>
                            <td>Unlimited</td>
                            <td>No fees<sup>2</sup></td>
                            <td>1 Working Day</td>
                            <td>
                                BTC, USDT, ETH, USDC<sup>7</sup></td>
                            <td><a  class="btn bb2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalToggle3">WITHDRAW</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>


    <section>
        <div class="container">

            <div class="remarkBTL position-relative">
                <h4>NOTES:</h4>
                <p><strong class="mr-2">1.</strong> @lang('Please note that for local bank transfers, which are available in some countries, the minimum deposit amount is approximately $50 and the minimum withdrawal amount is approximately $15. The specific limits for local bank transfers vary by country and will be displayed in the client portal during the deposit or withdrawal process.') </p>
                <p><strong class="mr-2">2.</strong> @lang('It is important to note that Highness Investment LLC does not charge any fees for deposits or withdrawals. However, please be aware that payment providers may charge their own fees.') </p>
                <p><strong class="mr-2">3.</strong> @lang('For most transactions, the processing time is usually within an hour.')
                </p>
                <p><strong class="mr-2">4.</strong> @lang('If you have pre-approved the card or it is 3D secure, the transaction will be instant. However, in cases of high network activity, the average processing time is around 10 minutes, but it may take up to an hour.') </p>
                <p><strong class="mr-2">5.</strong> @lang('Please keep in mind that if your account balance is low, there may be additional processing time for your transaction.') </p>
                <p><strong class="mr-2">6.</strong> @lang('It is worth mentioning that Highness only supports transactions using the ERC20 network for USDT, ETH, and USDC. If you deposit using any other network, your assets may be lost.') </p>


            </div>

            <h4 class="mt-5 fw-600">@lang('ADDITIONAL INFORMATION:')</h4>
            <div class="whiteBG border p-3">



                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('It is important to note that the limits mentioned in the previous article apply to each transaction.') </small>


                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('Please keep in mind that the availability of the deposit and withdrawal options mentioned above may vary depending on your country of residence. Some options may not be available to you.')</small>



                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('Please note that withdrawals can only be made using the same payment method that was used for the initial deposit.')</small>






                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('Please be aware that it is not possible to withdraw profits via card.')</small>



                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('Please note that certain payment options may only be available in specific countries. For more information, please contact us.')</small>



                <small class="mb-1"><strong class="mr-2"><i data-v-07452373="" data-name="chevron-right"
                            data-tags="" data-type="chevron-right" class="feather feather--chevron-right"><svg
                                data-v-07452373="" xmlns="http://www.w3.org/2000/svg" width="1.0rem" height="1.0rem"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather__content">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></i></strong>
                    @lang('Highness Investment LLC does not accept payments from third-party accounts. To ensure successful deposit transactions, please ensure that all deposits come from a bank account that is registered in your name. However, joint bank accounts and credit cards are acceptable for payment if the trading account holder is listed as one of the account holders.')</small>



            </div>
        </div>
    </section>
    <style>
        .tbody2 tr {
            line-height: 34px;
            text-align: center;
        }

        .tbody2 tr img {
            margin-top: 6px;
        }

        .bb2 {
            background: #e5e5e5;
            padding: 6px 14px;
            transition: all linear 0.2s;
            -moz-transition: all linear 0.2s;
            -ms-transition: all linear 0.2s;
            -o-transition: all linear 0.2s;
            -webkit-transition: all linear 0.2s;
        }

        .btn.bb2:hover {
            background: #4848485e;
            color: #fff;
        }

        .countent-100w input,
        .countent-100w select {
            width: 100%;
            padding: 6px;
        }

        .blue {
            color: #236bb4;
            font-size: 26px;
            font-weight: 700;
        }

        .hover-ul {
            cursor: pointer;
            font-size: 14px;

        }

        .hover-ul:hover {
            color: #6c6c6c;
            text-decoration: underline;
        }

        .blue2 {
            color: #236bb4;
        }
    </style>


    <form class="ajax_form_usdt" action="{{ route('sendUsdt', app()->getLocale()) }}" enctype="multipart/form-data"
        method="post">
        <input type="hidden" name="type2" value="resultMail">
        @csrf

        <!-- Modal -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">@lang('Deposit')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">
                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <img src="/images/new_images/other/usdt.jpg" class="mt-3" height="40"
                                        alt="usdt" style="margin: auto; display: table;">

                                    <center>
                                        <p>@lang('Minimum transfer is 25 USD (or currency equivalent)')</p>
                                    </center>

                                    <div class="mt-3">
                                        <label for="">@lang('Account number')</label>
                                        <input type="text" name="user_id" class="live-update-usd2"
                                            placeholder="Account number">
                                        <div class="invalid-feedback invalid-feedback2"></div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label for="">@lang('Deposit amount')</label>
                                        <input type="number" name="usdt" placeholder="0.00 USD"
                                            class="live-update-usd">
                                        <div class="invalid-feedback invalid-feedback1"></div>
                                    </div>

                                    <div class="mt-4">
                                        <input type="text" disabled value="0.00" class="currency"
                                            style="font-weight: 700;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary bt_loading_usdt">@lang('Next')</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">@lang('Deposit')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="d-flex justify-content-center hideIfLoadingSecoundModel ">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        <div class="container showIfLoadingSecoundModel d-none resultMail">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">

                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <img src="/images/new_images/other/usdt.jpg" class="mt-3" height="40"
                                        alt="usdt" style="margin: auto; display: table;">
                                    <div class="mt-3">
                                        <center>
                                            <p class="lead">
                                                PLEASE USE TRC20 TO DEPOSIT ORDER
                                            </p>
                                            <small>
                                                Remaining time to complete payment
                                            </small>
                                            <div class="blue" id="timer"></div>
                                        </center>
                                    </div>



                                </div>
                            </div>
                            <div class="row mt-5 g-1" style="font-size: 14px;">

                                <div class="col-md-2 blue2">Cryptocurrency:</div>
                                <div class="col-md-10 fw-bold">Thether TRC20</div>

                                <div class="d-block d-md-none" style="height: 8px"></div>
                                <div class="col-md-2 blue2">Wallet:</div>
                                <div class="col-md-10  fw-bold"><span
                                        id="copy02">TFX1cGZasaeKN1Ug2ZWDyhHq8daDrwoRC5</span>
                                    &nbsp; &nbsp; <span class="hover-ul" data-copy="copy02">
                                        <i class="fa-regular fa-paste"></i> COPY
                                    </span></div>

                                <div class="d-block d-md-none" style="height: 8px"></div>
                                <div class="col-md-2 blue2">Amount:</div>
                                <div class="col-md-10  currency fw-bold"></div>

                            </div>

                            <div class="countent-100w">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mt-3">
                                            <label for="">@lang('Name')</label>
                                            <input type="text" name="name" 
                                                placeholder="Name">
                                            <div class="invalid-feedback invalid-feedback2"></div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">@lang('Email')</label>
                                            <input type="email" required name="email" 
                                                placeholder="Email">
                                            <div class="invalid-feedback invalid-feedback2"></div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">@lang('Phone number')</label>
                                            <input type="text" name="phone" class="live-update-usd3"
                                                placeholder="Phone number">
                                            <div class="invalid-feedback invalid-feedback3"></div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="mt-4 countent-100w">
                                <label for="">@lang('image of the conversion')</label>
                                <input type="file" name="image" id="">
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary subNum1" onclick="changeType2('resultMail');">
                                    {{ __('Send') }}
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer closeIsSuccess">
                        <button class="btn  OpenFirstModel" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <form class="ajax_form_usdt2" action="{{ route('depositVisaOrMaster', app()->getLocale()) }}" method="post">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="visaMaster" aria-hidden="true" aria-labelledby="visaMaster"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="visaMaster">@lang('Deposit')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">
                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <span class="fundTypeImh d-flex" style="justify-items: center; justify-content: center; margin: 16px;">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwLjAwOCA3NzUuOTcyIiB4bWxuczp2PSJodHRwczovL3ZlY3RhLmlvL25hbm8iPjxwYXRoIGQ9Ik0xODEuOTc2IDc3NC4yNTV2LTUxLjUwMmMwLTE5Ljc0My0xMi4wMTgtMzIuNjE5LTMyLjYxOS0zMi42MTktMTAuMyAwLTIxLjQ1OSAzLjQzNC0yOS4xODQgMTQuNTkzLTYuMDA5LTkuNDQyLTE0LjU5My0xNC41OTMtMjcuNDY4LTE0LjU5My04LjU4NCAwLTE3LjE2OCAyLjU3NS0yNC4wMzUgMTIuMDE4di0xMC4zSDUwLjY0NHY4Mi40MDNINjguNjd2LTQ1LjQ5NGMwLTE0LjU5MiA3LjcyNS0yMS40NiAxOS43NDMtMjEuNDZzMTguMDI2IDcuNzI2IDE4LjAyNiAyMS40NnY0NS40OTRoMTguMDI2di00NS40OTRjMC0xNC41OTIgOC41ODMtMjEuNDYgMTkuNzQyLTIxLjQ2IDEyLjAxNyAwIDE4LjAyNiA3LjcyNiAxOC4wMjYgMjEuNDZ2NDUuNDk0aDE5Ljc0M3ptMjY2Ljk1NS04Mi40MDRoLTI5LjE4NXYtMjQuODkzSDQwMS43MnYyNC44OTNoLTE2LjMxdjE2LjMxaDE2LjMxdjM3Ljc2OGMwIDE4Ljg4NCA3LjcyNSAzMC4wNDMgMjguMzI2IDMwLjA0MyA3LjcyNiAwIDE2LjMxLTIuNTc1IDIyLjMxOC02LjAwOWwtNS4xNS0xNS40NWMtNS4xNSAzLjQzMy0xMS4xNTkgNC4yOTEtMTUuNDUgNC4yOTEtOC41ODUgMC0xMi4wMTgtNS4xNS0xMi4wMTgtMTMuNzM0di0zNi45MWgyOS4xODV2LTE2LjMwOXptMTUyLjc5LTEuNzE3Yy0xMC4zIDAtMTcuMTY3IDUuMTUtMjEuNDU5IDEyLjAxOHYtMTAuM2gtMTguMDI2djgyLjQwM2gxOC4wMjZ2LTQ2LjM1MmMwLTEzLjczNCA2LjAwOS0yMS40NiAxNy4xNjgtMjEuNDYgMy40MzMgMCA3LjcyNS44NTkgMTEuMTU5IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE3LS44NTl6bS0yMzAuOTAzIDguNTg0Yy04LjU4My02LjAwOS0yMC42LTguNTg0LTMzLjQ3Ni04LjU4NC0yMC42MDEgMC0zNC4zMzUgMTAuMy0zNC4zMzUgMjYuNjEgMCAxMy43MzQgMTAuMyAyMS40NiAyOC4zMjYgMjQuMDM1bDguNTg0Ljg1OGM5LjQ0MiAxLjcxNyAxNC41OTIgNC4yOTIgMTQuNTkyIDguNTg0IDAgNi4wMDgtNi44NjcgMTAuMy0xOC44ODQgMTAuM3MtMjEuNDYtNC4yOTItMjcuNDY4LTguNTg0bC04LjU4NCAxMy43MzRjOS40NDIgNi44NjcgMjIuMzE4IDEwLjMgMzUuMTk0IDEwLjMgMjQuMDM0IDAgMzcuNzY4LTExLjE1OCAzNy43NjgtMjYuNjA5IDAtMTQuNTkyLTExLjE1OS0yMi4zMTgtMjguMzI2LTI0Ljg5M2wtOC41ODQtLjg1OGMtNy43MjUtLjg1OC0xMy43MzQtMi41NzUtMTMuNzM0LTcuNzI1IDAtNi4wMDkgNi4wMDktOS40NDMgMTUuNDUtOS40NDMgMTAuMzAxIDAgMjAuNjAyIDQuMjkyIDI1Ljc1MiA2Ljg2N2w3LjcyNS0xNC41OTJ6bTQ3OC45NzQtOC41ODRjLTEwLjMgMC0xNy4xNjcgNS4xNS0yMS40NiAxMi4wMTh2LTEwLjNoLTE4LjAyNXY4Mi40MDNoMTguMDI2di00Ni4zNTJjMC0xMy43MzQgNi4wMDktMjEuNDYgMTcuMTY3LTIxLjQ2IDMuNDM0IDAgNy43MjYuODU5IDExLjE2IDEuNzE3bDUuMTUtMTcuMTY3Yy0zLjQzNC0uODU5LTguNTg0LS44NTktMTIuMDE4LS44NTl6bS0yMzAuMDQ0IDQyLjkyYzAgMjQuODkyIDE3LjE2NyA0Mi45MTggNDMuNzc3IDQyLjkxOCAxMi4wMTcgMCAyMC42LTIuNTc1IDI5LjE4NS05LjQ0MmwtOC41ODQtMTQuNTkzYy02Ljg2NyA1LjE1LTEzLjczNCA3LjcyNi0yMS40NiA3LjcyNi0xNC41OTIgMC0yNC44OTMtMTAuMy0yNC44OTMtMjYuNjEgMC0xNS40NSAxMC4zMDEtMjUuNzUxIDI0Ljg5My0yNi42MSA3LjcyNiAwIDE0LjU5MyAyLjU3NiAyMS40NiA3LjcyNmw4LjU4NC0xNC41OTNjLTguNTg0LTYuODY3LTE3LjE2OC05LjQ0Mi0yOS4xODUtOS40NDItMjYuNjEgMC00My43NzcgMTguMDI2LTQzLjc3NyA0Mi45MnptMTY2LjUyNSAwVjY5MS44NWgtMTguMDI2djEwLjNjLTYuMDA5LTcuNzI1LTE0LjU5My0xMi4wMTctMjUuNzUyLTEyLjAxNy0yMy4xNzYgMC00MS4yMDIgMTguMDI2LTQxLjIwMiA0Mi45MnMxOC4wMjYgNDIuOTE4IDQxLjIwMiA0Mi45MThjMTIuMDE4IDAgMjAuNjAxLTQuMjkyIDI1Ljc1Mi0xMi4wMTd2MTAuM2gxOC4wMjZ2LTQxLjIwMnptLTY2LjA5NSAwYzAtMTQuNTkzIDkuNDQyLTI2LjYxIDI0Ljg5Mi0yNi42MSAxNC41OTMgMCAyNC44OTMgMTEuMTU4IDI0Ljg5MyAyNi42MSAwIDE0LjU5Mi0xMC4zIDI2LjYwOS0yNC44OTMgMjYuNjA5LTE1LjQ1LS44NTktMjQuODkyLTEyLjAxNy0yNC44OTItMjYuNjF6bS0yMTUuNDUzLTQyLjkyYy0yNC4wMzQgMC00MS4yMDIgMTcuMTY4LTQxLjIwMiA0Mi45MnMxNy4xNjggNDIuOTE4IDQyLjA2IDQyLjkxOGMxMi4wMTggMCAyNC4wMzUtMy40MzQgMzMuNDc3LTExLjE1OWwtOC41ODQtMTIuODc2Yy02Ljg2NyA1LjE1LTE1LjQ1IDguNTg0LTI0LjAzNCA4LjU4NC0xMS4xNTkgMC0yMi4zMTgtNS4xNS0yNC44OTMtMTkuNzQyaDYwLjk0NXYtNi44NjhjLjg1OC0yNi42MS0xNC41OTMtNDMuNzc3LTM3Ljc2OS00My43Nzd6bTAgMTUuNDUxYzExLjE1OSAwIDE4Ljg4NCA2Ljg2NyAyMC42MDEgMTkuNzQzaC00Mi45MTljMS43MTctMTEuMTYgOS40NDMtMTkuNzQzIDIyLjMxOC0xOS43NDN6bTQ0Ny4yMTQgMjcuNDY4di03My44MmgtMTguMDI2djQyLjkxOWMtNi4wMDgtNy43MjYtMTQuNTkyLTEyLjAxOC0yNS43NTEtMTIuMDE4LTIzLjE3NiAwLTQxLjIwMiAxOC4wMjYtNDEuMjAyIDQyLjkyczE4LjAyNiA0Mi45MTggNDEuMjAyIDQyLjkxOGMxMi4wMTcgMCAyMC42MDEtNC4yOTIgMjUuNzUxLTEyLjAxN3YxMC4zaDE4LjAyNnYtNDEuMjAyem0tNjYuMDk1IDBjMC0xNC41OTIgOS40NDItMjYuNjEgMjQuODkzLTI2LjYxIDE0LjU5MiAwIDI0Ljg5MyAxMS4xNiAyNC44OTMgMjYuNjEgMCAxNC41OTMtMTAuMyAyNi42MS0yNC44OTMgMjYuNjEtMTUuNDUtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXptLTYwMi41OCAwdi00MS4yMDJoLTE4LjAyNnYxMC4zYy02LjAwOC03LjcyNS0xNC41OTItMTIuMDE3LTI1Ljc1MS0xMi4wMTctMjMuMTc2IDAtNDEuMjAyIDE4LjAyNi00MS4yMDIgNDIuOTJzMTguMDI2IDQyLjkxOCA0MS4yMDIgNDIuOTE4YzEyLjAxNyAwIDIwLjYwMS00LjI5MiAyNS43NTEtMTIuMDE3djEwLjNoMTguMDI2di00MS4yMDJ6bS02Ni45NTMgMGMwLTE0LjU5MiA5LjQ0Mi0yNi42MSAyNC44OTMtMjYuNjEgMTQuNTkyIDAgMjQuODkzIDExLjE2IDI0Ljg5MyAyNi42MSAwIDE0LjU5My0xMC4zIDI2LjYxLTI0Ljg5MyAyNi42MS0xNS40NTEtLjg1OS0yNC44OTMtMTIuMDE3LTI0Ljg5My0yNi42MXoiLz48cGF0aCBmaWxsPSIjZmY1ZjAwIiBkPSJNMzY0LjgxIDY2LjA5NWgyNzAuMzg4djQ4NS44NEgzNjQuODF6Ii8+PHBhdGggZmlsbD0iI2ViMDAxYiIgZD0iTTM4MS45NzcgMzA5LjAxNWMwLTk4LjcxMyA0Ni4zNTMtMTg2LjI2NyAxMTcuNTk4LTI0Mi45MkM0NDcuMjE0IDI0Ljg5MyAzODEuMTE5IDAgMzA5LjAxNSAwIDEzOC4yIDAgMCAxMzguMTk4IDAgMzA5LjAxNXMxMzguMTk5IDMwOS4wMTYgMzA5LjAxNSAzMDkuMDE2YzcyLjEwNCAwIDEzOC4xOTktMjQuODkzIDE5MC41Ni02Ni4wOTUtNzEuMjQ1LTU1Ljc5NS0xMTcuNTk4LTE0NC4yMDctMTE3LjU5OC0yNDIuOTJ6Ii8+PHBhdGggZmlsbD0iI2Y3OWUxYiIgZD0iTTEwMDAuMDA4IDMwOS4wMTVjMCAxNzAuODE3LTEzOC4xOTggMzA5LjAxNi0zMDkuMDE1IDMwOS4wMTYtNzIuMTA0IDAtMTM4LjE5OS0yNC44OTMtMTkwLjU2LTY2LjA5NSA3Mi4xMDQtNTYuNjUzIDExNy41OTgtMTQ0LjIwNyAxMTcuNTk4LTI0Mi45MlM1NzEuNjc4IDEyMi43NDggNTAwLjQzMyA2Ni4wOTVDNTUyLjc5NCAyNC44OTMgNjE4Ljg5IDAgNjkwLjk5MyAwYzE3MC44MTcgMCAzMDkuMDE1IDEzOS4wNTcgMzA5LjAxNSAzMDkuMDE1eiIvPjwvc3ZnPg==" title="mastercard" width="35" height="30"> <span class="fundTypeImh">Visa
                                        &amp; MasterCard</span></span>

                                    <center>
                                        <p>@lang('Minimum transfer is 50 USD (or currency equivalent)')</p>
                                    </center>
                                    <div class="mt-3">
                                        <label for="">@lang('Account number')</label>
                                        <input type="text" name="user_id" 
                                            placeholder="Account number">
                                        <div class="invalid-feedback invalid-feedback2"></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Name')</label>
                                        <input type="text" name="name" 
                                            placeholder="Name">
                                        <div class="invalid-feedback invalid-feedback2"></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Email')</label>
                                        <input type="email" required name="email" 
                                            placeholder="Email">
                                        <div class="invalid-feedback invalid-feedback2"></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Phone number')</label>
                                        <input type="text" name="phone" 
                                            placeholder="Phone number">
                                        <div class="invalid-feedback invalid-feedback3"></div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label for="">@lang('Deposit amount')</label>
                                        <input type="number" class="liveC" data-id="cc1" name="amount" min="1" max="5000" placeholder="0.00 USD"
                                            class="live-update-usd">
                                        <div class="invalid-feedback invalid-feedback1"></div>
                                    </div>

                                    <div class="mt-4">
                                        <input type="text" disabled value="0.00" id="cc1" class="currency"
                                            style="font-weight: 700;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary bt_loading_usdt">@lang('Deposit Now')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form class="ajax_form_usdt3" action="{{ route('bankDeposit', app()->getLocale()) }}" method="post">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="bankDeposit" aria-hidden="true" aria-labelledby="bankDeposit"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bankDeposit">@lang('Deposit')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">
                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <span class="fundTypeImh d-flex" style="justify-items: center; justify-content: center; margin: 16px;">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NjEgMjY5IDM1LjQgMjMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyI+PHBhdGggZD0iTS00MjguNCAyOTEuNmgtMzBhMi4yMiAyLjIyIDAgMCAxLTIuMi0yLjJ2LTE3LjhhMi4yMiAyLjIyIDAgMCAxIDIuMi0yLjJoMzBhMi4yMiAyLjIyIDAgMCAxIDIuMiAyLjJ2MTcuOGMuMSAxLjItMSAyLjItMi4yIDIuMnoiIGZpbGw9IiMzMjM3M2MiLz48cGF0aCBkPSJNLTQ1Ny42IDI4NS45aC0xbC44LTMuMWgtMS4xbC4yLS43aDMuMmwtLjIuN2gtMS4xYzAgMC0uOCAzLjEtLjggMy4xem0zLjMtMS40bC0uNCAxLjVoLTFsMS0zLjhoMS4xYy41IDAgLjkuMSAxLjEuMy4zLjIuNC40LjQuOCAwIC4zLS4xLjUtLjMuN3MtLjQuMy0uOC40bC44IDEuNmgtMWwtLjctMS41aC0uMiAwem0uMS0uN2guMmMuMyAwIC41IDAgLjYtLjFzLjItLjIuMi0uNGMwLS4xLS4xLS4yLS4yLS4zcy0uMy0uMS0uNS0uMWgtLjJsLS4xLjloMHptNS4xIDEuMmgtMS41bC0uNS45aC0xbDIuNC0zLjhoMS4ybC41IDMuOGgtLjljLS4xIDAtLjItLjktLjItLjl6bTAtLjZsLS4xLS45di0uNy0uMWMtLjEuMi0uMi40LS4zLjdsLS42IDFoMSAwem01LjUgMS41aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjhoMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjJoLjlsLTEgMy44aDB6bTQuMS0xLjFjMCAuNC0uMi42LS41LjktLjMuMi0uNy4zLTEuMy4zLS41IDAtLjgtLjEtMS4xLS4ydi0uN2MuNC4yLjguMyAxLjEuMy4yIDAgLjQgMCAuNi0uMS4xLS4xLjItLjIuMi0uM3YtLjJjMC0uMS0uMS0uMS0uMS0uMi0uMSAwLS4yLS4xLS40LS4zLS4zLS4yLS41LS4zLS42LS41cy0uMi0uMy0uMi0uNS4xLS40LjItLjYuMy0uMy42LS40Yy4yLS4xLjUtLjEuOC0uMS41IDAgLjkuMSAxLjMuM2wtLjMuNmMtLjMtLjEtLjYtLjItLjktLjItLjIgMC0uMyAwLS40LjFzLS4yLjItLjIuMyAwIC4yLjEuMy4yLjIuNS4zLjQuMy42LjVjMCAwIDAgLjIgMCAuNGgwem0xLjggMS4xaC0xbDEtMy44aDIuNmwtLjIuN2gtMS42bC0uMyAxaDEuNWwtLjIuN2gtMS41bC0uMyAxLjRoMHptNS4yIDBoLTIuNmwxLTMuOGgyLjZsLS4yLjdoLTEuNmwtLjIuOGgxLjVsLS4yLjdoLTEuNWwtLjMgMWgxLjZsLS4xLjZoMHptMi40LTEuNGwtLjQgMS41aC0xbDEtMy44aDEuMWMuNSAwIC45LjEgMS4xLjMuMy4yLjQuNC40LjggMCAuMy0uMS41LS4zLjdzLS40LjMtLjguNGwuOCAxLjZoLTFsLS43LTEuNWgtLjIgMHptLjItLjdoLjJjLjMgMCAuNSAwIC42LS4xLjItLjEuMi0uMi4yLS40IDAtLjEtLjEtLjItLjItLjNzLS4zLS4xLS41LS4xaC0uMmwtLjEuOWgwem0tMTQuNi03LjVjLjUgMCAuOC4xIDEuMS4yLjIuMS40LjQuNC42IDAgLjMtLjEuNS0uMy43cy0uNC4zLS43LjNoMGEuNTUuNTUgMCAwIDEgLjUuM2MuMS4xLjIuMy4yLjUgMCAuNC0uMi43LS41LjlzLS44LjMtMS4zLjNoLTEuN2wxLTMuOWMtLjEuMSAxLjMuMSAxLjMuMXptLTEuMiAzLjJoLjZjLjIgMCAuNC0uMS42LS4yLjEtLjEuMi0uMi4yLS40IDAtLjMtLjItLjQtLjYtLjRoLS41bC0uMyAxem0uNC0xLjdoLjVjLjMgMCAuNCAwIC42LS4xLjEtLjEuMi0uMi4yLS40cy0uMi0uNC0uNS0uNGgtLjVjLS4xLjEtLjMuOS0uMy45em01LjEgMS41aC0xLjVsLS41LjloLTFsMi40LTMuOWgxLjJsLjUgMy45aC0uOWwtLjItLjloMHptMC0uN2wtLjEtLjl2LS43LS4xYy0uMS4yLS4yLjQtLjMuN2wtLjYgMWMtLjEgMCAxIDAgMSAwem01LjUgMS42aC0xLjFsLTEuMS0yLjloMHYuMWMtLjEuNC0uMS43LS4yIDFsLS41IDEuOGgtLjlsMS0zLjloMS4xbDEuMSAyLjhoMGMwLS4xLjEtLjMuMS0uNi4xLS4yLjItMSAuNi0yLjNoLjlsLTEgNGgwem00LjggMGgtMS4xbC0uNy0xLjYtLjQuMi0uMyAxLjRoLTFsMS0zLjloMWwtLjUgMS45LjUtLjUgMS4zLTEuM2gxLjFsLTEuOSAxLjkgMSAxLjloMHptLTE4LjktMy41YzAtLjItLjItLjQtLjQtLjRoLTguNWMtLjIgMC0uNC4yLS40LjRoMGMwIC4yLjIuNC40LjRoOC41Yy4yIDAgLjQtLjIuNC0uNGgwem0tMi4zIDEuNWMwLS4yLS4yLS40LS40LS40aC02LjJjLS4yIDAtLjQuMi0uNC40aDBjMCAuMi4yLjQuNC40aDYuMmMuMiAwIC40LS4yLjQtLjRoMHptLTIuNCAxLjZjMC0uMi0uMi0uNC0uNC0uNGgtMy45Yy0uMiAwLS40LjItLjQuNGgwYzAgLjIuMi40LjQuNGgzLjljLjMgMCAuNC0uMi40LS40aDB6IiBmaWxsPSIjZmZmIi8+PC9zdmc+" 
                                        title="mastercard" width="35" height="30"> <span class="fundTypeImh">
                                            Bank Transfer</span></span>

                                            
                                    <div id="resultBankDeposit">
                                        <div class="mt-3">
                                            <label for="">@lang('Account number')</label>
                                            <input type="text" required name="account_number" 
                                                placeholder="Account number">
                                            <div class="invalid-feedback invalid-feedback2"></div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">@lang('Name')</label>
                                            <input type="text" required name="name" 
                                                placeholder="Name">
                                            <div class="invalid-feedback invalid-feedback2"></div>
                                        </div>
    
                                        <div class="mt-3">
                                            <label for="">@lang('Email')</label>
                                            <input type="email" required name="email" 
                                                placeholder="Email">
                                            <div class="invalid-feedback invalid-feedback2"></div>
                                        </div>
    
                                        <div class="mt-3">
                                            <label for="">@lang('Deposit amount')</label>
                                            <input type="number" class="liveC" data-id="cc2" name="amount" min="50" max="50000" placeholder="0.00 USD"
                                                class="live-update-usd">
                                            <div class="invalid-feedback invalid-feedback1"></div>
                                        </div>
    
                                        <div class="mt-4">
                                            <input type="text" disabled value="0.00" id="cc2" class="currency"
                                                style="font-weight: 700;">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer subsub001">
                        <button type="submit" class="btn btn-primary">@lang('Deposit Now')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <form action="{{ route('withdrawUsdt', app()->getLocale()) }}" class="ajax_form_usdt" method="post">
        <input type="hidden" name="type2" value="resultMail2">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" 
        aria-labelledby="exampleModalToggleLabel3"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel3">@lang('Withdraw')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container resultMail2">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">
                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <img src="/images/new_images/other/usdt.jpg" class="mt-3" height="40"
                                        alt="usdt" style="margin: auto; display: table;">

                                    <div class="mt-3">
                                        <label for="">@lang('Account number')</label>
                                        <input type="text" name="user_id" class="live-update-usd2"
                                            placeholder="Account number">
                                        <div class="invalid-feedback invalid-feedback2"></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Phone number')</label>
                                        <input type="text" name="phone" 
                                            placeholder="Phone number">
                                        <div class="invalid-feedback invalid-feedback3"></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Withdraw  amount')</label>
                                        <input type="number" name="usdt" placeholder="0.00 USD"
                                            class="live-update-usd">
                                        <div class="invalid-feedback invalid-feedback1"></div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-outline-primary" onclick="changeType2('resultMail2');">
                                            {{ __('Send') }}
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <form class="depositSticpay" 
    action="{{ route('depositSticpay', app()->getLocale()) }}" method="post">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="sticpayToggle" aria-hidden="true" aria-labelledby="sticpayToggle"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background-color: #242322f7;">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Deposit')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-8 countent-100w">
                                    <div>
                                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60" alt="Highness"
                                            style="margin: auto; display: table;">
                                    </div>

                                    <span class="fundTypeImh d-flex" style="justify-items: center; justify-content: center; margin: 16px;">
                                        <img src="{{ asset('images/new_images/svg/sticpay_bank2.svg') }}" title="mastercard" width="35" height="30">
                                        <span class="fundTypeImh">
                                            Sticpay Bank
                                        </span>
                                    </span>

                                    <center>
                                        <p>@lang('Minimum transfer is 50 USD (or currency equivalent)')</p>
                                    </center>
                                    <div class="mt-3">
                                        <label for="">@lang('Account number')</label>
                                        <input type="text" name="account_number" 
                                            placeholder="Account number">
                                        <div class="invalid-feedback "></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Name')</label>
                                        <input type="text" name="name" 
                                            placeholder="Name">
                                        <div class="invalid-feedback "></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Email')</label>
                                        <input type="email" required name="email" 
                                            placeholder="Email">
                                        <div class="invalid-feedback "></div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="">@lang('Phone number')</label>
                                        <input type="text" name="phone" 
                                            placeholder="Phone number">
                                        <div class="invalid-feedback invalid-feedback3"></div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label for="">@lang('Deposit amount')</label>
                                        <input type="number" class="liveC" data-id="sticpay01" name="amount" min="1" max="5000" placeholder="0.00 USD"
                                            class="live-update-usd">
                                        <div class="invalid-feedback invalid-feedback1"></div>
                                    </div>

                                    <div class="mt-4">
                                        <input type="text" disabled value="0.00" id="sticpay01" class="currency"
                                            style="font-weight: 700;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary bt_loading_usdt">@lang('Deposit Now')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        (function($) {

            $.fn.currencyFormat = function() {
                this.each(function(i) {
                    $(this).change(function(e) {
                        if (isNaN(parseFloat(this.value))) return;
                        this.value = parseFloat(this.value).toFixed(2);
                    });
                });
                return this; //for chaining
            }
        })(jQuery);

        var minutes = 60;
        var seconds = 0;
        var timerInterval;
        var error_message = "{{ __('error01') }}";
        var error_message2 = "{{ __('error02') }}";
        var error_message3 = "{{ __('error03') }}";
        var error_message4 = "{{ __('error04') }}";
        $(function() {

            $(".liveC").keyup(function() {

                $("#"+$(this).data('id')).val(parseFloat($(this).val()).toFixed(2) + " $");
            });


            $(".live-update-usd, .live-update-usd2").keyup(function() {

                $(".currency").val(parseFloat($(".live-update-usd").val()).toFixed(2) + " $");
                $(".currency").text(parseFloat($(".live-update-usd").val()).toFixed(2) + " $");
                if (parseInt($(".live-update-usd").val()) >= 25 && $(".live-update-usd2").val() != '' ) {
                    $(".bt_loading_usdt").attr('data-bs-target', '#exampleModalToggle2').attr(
                            'data-bs-toggle', 'modal')
                        .attr('data-bs-dismiss', 'modal');
                } else {
                    $(".bt_loading_usdt").removeAttr('data-bs-target').removeAttr('data-bs-toggle')
                        .removeAttr('data-bs-dismiss');
                }
            });

            $(".bt_loading_usdt").click(function() {
                $(".invalid-feedback1").hide();
                $(".invalid-feedback2").hide();
                $(".invalid-feedback3").hide();

                if ($(".live-update-usd2").val() == '') {
                    $(".invalid-feedback2").text(error_message2).slideDown();
                    return;
                }


                if (parseFloat($(".live-update-usd").val()) <= 0 || $(".live-update-usd").val() == '') {
                    $(".invalid-feedback1").text(error_message).slideDown();
                    return;
                }

                if(parseInt($(".live-update-usd").val()) < 25){
                    $(".invalid-feedback1").text(error_message4).slideDown();
                    return;
                }



                setTimeout(() => {
                    $(".hideIfLoadingSecoundModel").addClass('d-none');
                    $(".showIfLoadingSecoundModel").removeClass('d-none').hide().fadeIn();
                    clearInterval(timerInterval);
                    timerInterval = setInterval(updateTimer, 1000); // Update every second
                }, 1600);
            });

            $(".OpenFirstModel").click(function() {
                setTimeout(() => {
                    $(".hideIfLoadingSecoundModel").removeClass('d-none');
                    $(".showIfLoadingSecoundModel").hide();
                    clearInterval(timerInterval);
                    minutes = 60;
                    seconds = 0;
                }, 200);
            });

            $(".hover-ul").click(function(e) {
                var idd = $(this).data('copy');
                var inputt = $("<textarea>");
                $(this).append(inputt);
                var text = $('#' + idd).text();
                copyT(text, inputt);
            });

        });

        function updateTimer() {
            $('#timer').text(minutes + ":" + (seconds < 10 ? "0" + seconds : seconds));
            if (minutes === 0 && seconds === 0) {
                clearInterval(timerInterval);
                alert("Time's up!");
            } else {
                if (seconds === 0) {
                    minutes--;
                    seconds = 59;
                } else {
                    seconds--;
                }
            }
        }

        function copyT(tt, dd) {
            dd.val(tt);
            dd.select();
            document.execCommand('copy');
            dd.remove();

        }

        var oldSubmit = "";
        var typeResult = "resultMail";

        function changeType2(tt){
            typeResult = tt;
        }
        
        $(document).ready(function(e) {
            var forms = $(".ajax_form_usdt");
            $(forms).ajaxForm({
                beforeSend: function() {
                    oldSubmit = $(".subNum1").text();
                    $(".subNum1").text("{{ __('Loading') }}...").attr('disabled', 'disabled');
                    removeErrors(forms);
                },
                uploadProgress: function(event, position, total, percentComplete) {},
                complete: function(data) {
                    $(".subNum1").text(oldSubmit).removeAttr('disabled');
                    if (data.status == 422) {
                        errors(forms, data.responseJSON);
                    }
                    if (data.status == 200) {
                        console.log(typeResult);
                        $(".closeIsSuccess").hide();
                        $("."+typeResult).hide().html(data.responseText).fadeIn();
                    }
                }
            });

            var forms2 = $(".ajax_form_usdt2");
            $(forms2).ajaxForm({
                beforeSend: function() {
                    oldSubmit = $(forms2).find("[type='submit']").text();
                    removeErrors(forms2);
                },
                uploadProgress: function(event, position, total, percentComplete) {},
                complete: function(data) {
                    $(forms2).find("[type='submit']").text(oldSubmit).removeAttr('disabled');
                    if (data.status == 422) {
                        errors(forms2, data.responseJSON);
                        return;
                    }
                    if (data.status == 200) {
                        window.location.href = "{{ route('stripe.checkout', app()->getLocale()) }}";
                    }
                    // redirect to success page
                    
                     
                }
            });

            var forms2 = $(".depositSticpay");
            $(forms2).ajaxForm({
                beforeSend: function() {
                    oldSubmit = $(forms2).find("[type='submit']").text();
                    removeErrors(forms2);
                },
                uploadProgress: function(event, position, total, percentComplete) {},
                complete: function(data) {
                    $(forms2).find("[type='submit']").text(oldSubmit).removeAttr('disabled');
                    if (data.status == 422) {
                        errors(forms2, data.responseJSON);
                        return;
                    }
                    if (data.status == 200) {
                        window.location.href = data.responseJSON.url;
                    }else{
                        alert('Error plz call the support');
                    }
                    // redirect to success page
                    
                     
                }
            });

            var forms3 = $(".ajax_form_usdt3");
            $(forms3).ajaxForm({
                beforeSend: function() {
                    oldSubmit = $(forms3).find("[type='submit']").text();
                    removeErrors(forms3);
                },
                uploadProgress: function(event, position, total, percentComplete) {},
                complete: function(data) {
                    $(forms3).find("[type='submit']").text(oldSubmit).removeAttr('disabled');
                    if (data.status == 422) {
                        errors(forms3, data.responseJSON);
                    }
                    if (data.status == 200) {
                        $("#resultBankDeposit").html(` <div class="alert alert-success" role="alert">@lang('An email with bank information has been sent to your email')</div>`).hide().fadeIn();
                        $(".subsub001").hide();
                    }
                    // redirect to success page
                    
                     
                }
            });

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })

        });
    </script>
@endsection
