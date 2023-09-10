import { useState } from "react";
import "./App.css";

function App() {
    const [count, setCount] = useState(0);

    return (
        <>
            <form>
                <div className="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" className="form-control" />
                </div>
                <div className="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" className="form-control" />
                </div>
                <div className="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" className="form-control" />
                </div>
                <div>
                  <button type="submit">Save</button>
                </div>
            </form>
        </>
    );
}

export default App;
