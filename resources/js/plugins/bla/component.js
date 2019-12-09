import component from "./Bla.vue";

export default class Bla {
    static install(Vue, options = {}) {
        Vue.component("bla", component);
        
    }
    
}
