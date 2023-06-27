import { usePage } from "@inertiajs/vue3"

export default function __ (key, replacements = {}) {
    let translation = usePage().props.translations[key]

    Object.keys(replacements).forEach(r => {
        translation = translation.replace(`:${r}`, replacements[r])
    })

    return translation
}
