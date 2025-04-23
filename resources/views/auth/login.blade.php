<x-layout>
    <div class="auth-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input id="email" name="email" type="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit" role="button" name="submit" id="submit">Login</button>
                </div>
            </fieldset>
        </form>
    </div>
</x-layout>
