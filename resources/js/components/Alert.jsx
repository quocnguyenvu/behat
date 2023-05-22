import { usePage } from "@inertiajs/inertia-react";
import { SnackbarProvider } from "notistack";
import React, { useEffect } from "react";

export default function Alert() {
    const { flash } = usePage().props;

    return (
        <div>
            {flash.message && (
                <div className={`alert alert-${flash.type}`} role="alert">
                    {flash.message}
                </div>
            )}
        </div>
    );
}
