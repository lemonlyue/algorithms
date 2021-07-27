package main

import (
	"fmt"
	"strconv"
	"strings"
)

func sortSentence(s string) string {
	data := strings.Split(s, " ")
	result := make([]string, len(data))
	for _, value := range data {
		length := len(value)
		num, _ := strconv.Atoi(value[length - 1:])
		result[num-1] = value[0:length-1]
	}
	str := strings.Join(result, " ")
	return str
}

func main()  {
	fmt.Println(sortSentence("is2 sentence4 This1 a3"))
}