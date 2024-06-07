import React from "react";
import { useEffect } from "react";
import { useRef } from "react";

const NewMessageInput = ({ value, onChange, onSend }) => {
    const input = useRef();

    const onInputKeyDown = (e) => {
        if (e.key === "Enter" && !e.shiftKey) {
            e.preventDefault();
            onSend();
        }
    };
    const onChangeEvent = (e) => {
        setTimeout(() => {
            adjustHeight();
        }, 10);
        onChange(e);
    };

    const adjustHeight = () => {
        setTimeout(() => {
            input.current.style.height = "auto";
            input.current.style.height = input.current.scrollHeight + 1 + "px";
        }, 100);
    };

    useEffect(() => {
        adjustHeight();
    }, [value]);

    return (
        <textarea
            rows="1"
            placeholder="type a message"
            onKeyDown={onInputKeyDown}
            onChange={(e) => onChangeEvent(e)}
            ref={input}
            value={value}
            className="input input-bordered w-full rounded-r-none resize-none overflow-y-auto max-h-40"
        ></textarea>
    );
};

export default NewMessageInput;
