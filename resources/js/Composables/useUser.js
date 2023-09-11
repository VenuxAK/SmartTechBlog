import { useForm, usePage } from "@inertiajs/vue3";

const form = useForm({});
const page = usePage();

export const useUser = () => {
    const signout = () => {
        if (confirm("Are you sure want to logout?")) {
            form.post("/logout");
            return 1;
        }
        return 0;
    };

    return { signout };
};
