import { useForm } from "@inertiajs/inertia-react";

const Login = () => {
    const { data, setData, post, processing, errors } = useForm({
        email: "",
        password: "",
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post("/login");
    };

    return (
        <div>
            <h1>Login Page</h1>
            {errors.email && <div>{errors.email}</div>}
            {errors.password && <div>{errors.password}</div>}
            <form onSubmit={handleSubmit}>
                <div>
                    <label>Email:</label>
                    <input
                        type="email"
                        name="email"
                        value={data.email}
                        onChange={(e) => setData("email", e.target.value)}
                    />
                </div>
                <div>
                    <label>Password:</label>
                    <input
                        type="password"
                        name="password"
                        value={data.password}
                        onChange={(e) => setData("password", e.target.value)}
                    />
                </div>
                <button type="submit" disabled={processing}>
                    {processing ? "Logging in..." : "Log in"}
                </button>
            </form>
        </div>
    );
};

export default Login;
