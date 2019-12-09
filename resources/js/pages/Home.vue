<script>
import Login from "../components/Login";
import Register from "../components/Register";
export default {
  components: { Login,Register },
  data() {
    return {
      isMember: true
    };
  },
  computed: {
    isAlreadyMember() {
      return this.isMember ? "Login" : "Register";
    }
  },
};
</script>
<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .2s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
