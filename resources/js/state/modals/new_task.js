const state = {
    isOpen: false,
}

const actions = {
    openModal({ commit }) {
        commit('SET_MODAL_STATUS', true);
    },
    closeModal({ commit }) {
        commit('SET_MODAL_STATUS', true);
    },
}

const mutations = {
    SET_MODAL_STATUS(state, payload) {
        state.isOpen = payload;
    },
}
const getters = {
    isOpen: state => state.isOpen,
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
};
