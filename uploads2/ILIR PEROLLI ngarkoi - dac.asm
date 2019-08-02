; This program generates a ramp on the DAC
; output.

; You can try adding values other than 8
; to the accumulator to see what this does
; to the ramp signal.

	CLR P0.7	; enable the DAC WR line
loop: 
	MOV P1, A	; move data in the accumulator to the ADC inputs (on P1)
	ADD A, #8	; increase accumulator by 8
	JMP loop	; jump back to loop
