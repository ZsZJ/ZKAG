<template>
    <div class="container-fluid py-5 bg-light d-flex justify-content-center">
        <div class="flex-column align-self-center w-50">
            <h3>Dashboard inloggen</h3>
            <div class="card rounded-0">
                <div class="card-body">
                    <form method="post" action="login">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="user@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <input type="hidden" name="_token" :value="csrf">
                        <button type="submit" class="btn btn-primary rounded-0 btn-info">Inloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          csrf: document.getElementsByTagName("meta")[1].content,
        }
      }
    }
</script>

<style scoped>
    .container-fluid {
        height: 35rem;
    }

    h3 {
        font-weight: 700;
    }
</style>