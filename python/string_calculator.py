import re


class StringCalculator:
    def add(self, number_string):
        if number_string == "":
            return 0

        if number_string.startswith("//"):
            delimiter = number_string[2]
            number_string = number_string[4:]
            number_array = number_string.split(delimiter)
        else:
            number_array = re.split(r"[\n,]+", number_string)

        return sum(int(n) for n in number_array)
